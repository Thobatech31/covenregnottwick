<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class CheckoutWorkSpaceSearchController extends Controller
{
     function index(){
       return view('checkoutworkspaces');
   }

   function action(Request $request){
       if($request->ajax()){
            $query = $request->get('query');
            // echo'boom';
                if($query != ' '){
                    $data = DB::table('newworkspaces')
                            ->where('Surname', 'like', $query. '%')
                             ->orWhere('Firstname', 'like', $query. '%')
                             ->orWhere('Othernames', 'like', $query. '%')
                             ->orWhere('Email', 'like', $query. '%')
                             ->orWhere('PhoneNumber', 'like', $query. '%')
                             ->orWhere('Sex', 'like', $query. '%')
                             ->orWhere('WorkSpace', 'like', $query. '%')
                             ->orWhere('created_at', 'like', $query. '%')
                             ->orWhere('Status', 'like', $query. '%')
                             ->get();
                }else{
                    $data = DB::table('newworkspaces')
                            ->orderBy('id', 'desc')
                            ->get();
                    
                }
                $total_row = $data->count();
                    if($total_row > 0){
                        $output = '';
                        foreach($data as $row)
                        {
                            if($row->Status!='Checkout'){
                                 $output .= '
                                <tr id="tablecolor">
                                    <td>'.$row->Surname.'</td>
                                    <td>'.$row->Firstname.'</td>
                                    <td>'.$row->Othernames.'</td>
                                    <td>'.$row->Email.'</td>
                                    <td>'.$row->PhoneNumber.'</td>
                                    <td>'.$row->Sex.'</td>
                                    <td>'.$row->WorkSpace.'</td>
                                    <td>'.$row->created_at.'</td>
                                     <td>'.$row->Status.'</td>
                                    <td> <a href="/checkoutForNewWorkSpace/'.$row->id.'"> CheckOut </a></td>
                                </tr>
                            ';
                            }
                           
                        }
                    }else{
                        $output = '
                            <tr>
                                <td align="center" colspan="5">No Data Found</td>
                            </tr>
                        ';
                    }
                    $data = array(
                        'table_data' => $output,
                        'total_data' => $total_row
                    );

                    echo json_encode($data);
       }
   }
}
