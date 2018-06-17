<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\newworkspaces;
use DataTables;

class NewWorkSpaceDatabaseDataController extends Controller
{
       public function getData(){
        return view('databaseData.newworkspacedata');
        
    }

    public function fetchData(){
        $newworkspaces = newworkspaces::all();
        return DataTables::of($newworkspaces)
   //     ->addColumn('action', function ($newworkspaces){
     //       return '<a href="#edit-'.$newworkspaces->id.'"  style="background-color:blue; color:white; font-weight:bold; text-decoration:none;">
      //      Edit</a>'.'<a href="#delete-'.$newworkspaces->id.'" style="background-color:red; margin-left:8px; font-weight:bold; color:white; text-decoration:none;">
      //      Delete</a>';
      //  })
        ->make(true);
        
    }
}
