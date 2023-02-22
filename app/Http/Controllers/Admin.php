<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{ function login(){
return view('Admin.login');  
}
 
    function loginsubmit(Request $request ){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
    $email=$request->post('email');
    $password=$request->post('password');
     
    if ($email=='pawanmeeenazee@gmail.com' && $password=='pawanmeeenazee@gmail.com') {
        session()->put('email',$email);
        return redirect('welcome');  
    }else {
         return view('Admin.login');  ;
    }


    }
}
