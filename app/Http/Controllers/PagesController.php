<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function trainingcheckout(){
        return view('pages.trainingcheckout');
    }

    public function onVisitCheckout(){
        return view('pages.onVisitCheckout');
    }

     public function WorkSpaceCheckout(){
        return view('pages.WorkSpaceCheckout');
    }

    public function covenspace(){
        return view('pages.covenspace');
    }

    public function adminpage(){
        return view('databaseData.adminpage');
    }
}
