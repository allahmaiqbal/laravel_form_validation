<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    function index(){
         return view('form');
    }

    function submit(Request $request){
          $rules = [
              'name'=>'required|max:5',
              'email'=>'required|email',
          ];
          $customMessage = [
              'name.required'=>'Enter your name',
              'name.max'=>'You can not use mor then five char',
              'email.required'=>'Enter your email',
              'email.email'=>'Enter valid email number'

          ];
          $this->validate($request,$rules,$customMessage);
        return $request->all();
    }
}
