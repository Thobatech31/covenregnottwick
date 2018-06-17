<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Onvisittable;

class RegistersOnvisitController extends Controller
{
     public function register2(Request $request){
        $this->validate($request, [
            'visitName' => 'required',
            'name' => 'required',
            
        ]);
        
        $Onvisittable = new Onvisittable;
        $Onvisittable->visitName = $request->input('visitName');
        $Onvisittable->name = $request->input('name');
       
        $Onvisittable->save();
        return redirect('/')->with('response', 'Registration Successful');

     }
}
