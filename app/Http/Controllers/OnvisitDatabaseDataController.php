<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Onvisittable;
use DataTables;

class OnvisitDatabaseDataController extends Controller
{
       public function getData(){
    
     
  
        return view('databaseData.onvisittabledata');
        
    }

       public function fetchData(){
         $Onvisittable = Onvisittable::all();
        return DataTables::of($Onvisittable)
     //   ->addColumn('action', function ($Onvisittable){
     //       return '<a href="#edit-'.$Onvisittable->id.'"  style="background-color:blue; color:white; font-weight:bold; text-decoration:none;">
     //       Edit</a>'.'<a href="#delete-'.$Onvisittable->id.'" style="background-color:red; margin-left:8px; font-weight:bold; color:white; text-decoration:none;">
     //       Delete</a>';
     //   })
        ->make(true);
        
    }
}
