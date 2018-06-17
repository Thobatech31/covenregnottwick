<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;


class TrainingSearchController extends Controller
{
   function index(){
       return view('trainingcheckout');
   }

   function action(Request $request){
       if($request->ajax()){
            $query = $request->get('query');
            // echo'boom';
                if($query != ''){
                    $data = DB::table('trainingtables')
                            ->where('name', 'like',  $query. '%')
                             ->orWhere('email', 'like',  $query. '%')
                             ->orWhere('phoneNo', 'like',  $query. '%')
                             ->orWhere('address', 'like',  $query. '%')
                             ->orWhere('trainingType', 'like',  $query. '%')
                             ->orWhere('created_at', 'like',  $query. '%')
                             ->orWhere('Status', 'like',  $query. '%')
                             ->get();
                }else{
                    $data = DB::table('trainingtables')
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
                                    <td>'.$row->name.'</td>
                                    <td>'.$row->email.'</td>
                                    <td>'.$row->phoneNo.'</td>
                                    <td>'.$row->address.'</td>
                                    <td>'.$row->trainingType.'</td>
                                    <td>'.$row->created_at.'</td>
                                     <td>'.$row->Status.'</td>
                                    <td> <a href="/checkoutForTraining/'.$row->id.'"> CheckOut </a></td>
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
