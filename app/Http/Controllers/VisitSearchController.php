<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class VisitSearchController extends Controller
{
     function index(){
       return view('visitcheckout');
   }

   function action(Request $request){
       if($request->ajax()){
            $query = $request->get('query');
            // echo'boom';
                if($query != ' '){
                    $data = DB::table('onvisittables')
                            ->where('visitName', 'like', $query. '%')
                             ->orWhere('name', 'like', $query. '%')
                             ->orWhere('created_at', 'like', $query. '%')
                             ->orWhere('Status', 'like', $query. '%')
                             ->get();
                }else{
                   $data = DB::table('onvisittables')
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
                                    <td>'.$row->visitName.'</td>
                                    <td>'.$row->name.'</td>
                                    <td>'.$row->created_at.'</td>
                                     <td>'.$row->Status.'</td>
                                    <td> <a href="/checkoutForVisit/'.$row->id.'"> CheckOut </a></td>
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
