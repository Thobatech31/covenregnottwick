<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CheckedOutController extends Controller
{
    
   public function CheckedOut(Request $request, $id){
       $checkout='Checkout';
       $checkout_time=date("y-m-d G:i:s",time());
         $data = DB::table('trainingtables')
                            ->where('id', $id)
                            ->update([
                                'Status'=>$checkout,
                                'Checkout_time'=>$checkout_time,
                            ]);
                             
                            return redirect('/')->with('response', 'Successfully CheckOut');
          
    }

   public function CheckedOutVisit(Request $request, $id){
       $checkout='Checkout';
       $checkout_time=date("y-m-d G:i:s",time());
         $data = DB::table('onvisittables')
                            ->where('id', $id)
                            ->update([
                                'Status'=>$checkout,
                                'Checkout_time'=>$checkout_time,
                            ]);
                             
                            return redirect('/')->with('response', 'Successfully CheckOut');
          
    }


      public function CheckedOutNewWorkSpace(Request $request, $id){
       $checkout='Checkout';
       $checkout_time=date("y-m-d G:i:s",time());
         $data = DB::table('newworkspaces')
                            ->where('id', $id)
                            ->update([
                                'Status'=>$checkout,
                                'Checkout_time'=>$checkout_time,
                            ]);
                             
                            return redirect('/')->with('response', 'Successfully CheckOut');
          
    }

        

  
}
