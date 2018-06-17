<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\trainingtable;

class RegistersController extends Controller
{
    public function register(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phoneNo' => 'required',
            'address' => 'required',
            'trainingType' => 'required',
        ]);
        
        $trainingtables = new trainingtable;
        $trainingtables->name = $request->input('name');
        $trainingtables->email = $request->input('email');
        $trainingtables->phoneNo = $request->input('phoneNo');
        $trainingtables->address = $request->input('address');
        $trainingtables->trainingType = $request->input('trainingType');
        $trainingtables->save();
        return redirect('/')->with('response', 'Registration Successful');

    }
}
