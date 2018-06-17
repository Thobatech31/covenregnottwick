<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\newworkspaces;
class RegistersWorkSpaceController extends Controller
{
        public function register3(Request $request){
        $this->validate($request, [
            'Surname' => 'required',
            'Firstname' => 'required',
            'Othernames' => 'required',
            'Email' => 'required',
            'PhoneNumber' => 'required',
            'Sex' => 'required',
            'WorkSpace' => 'required',
            
            
        ]);
        
        $newworkspaces = new newworkspaces;
        $newworkspaces->Surname = $request->input('Surname');
        $newworkspaces->Firstname = $request->input('Firstname');
        $newworkspaces->Othernames = $request->input('Othernames');
        $newworkspaces->Email = $request->input('Email');
        $newworkspaces->PhoneNumber = $request->input('PhoneNumber');
        $newworkspaces->Sex = $request->input('Sex');
        $newworkspaces->WorkSpace = $request->input('WorkSpace');
        $newworkspaces->save();
        return redirect('/')->with('response', 'Registration Successful');

    }
}
