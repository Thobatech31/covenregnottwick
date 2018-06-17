<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkSpaceController extends Controller
{
     public function NewWorkSpace(){
        return view('pages.NewWorkSpace');
    }
}
