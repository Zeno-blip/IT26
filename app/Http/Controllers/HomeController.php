<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function register(Request $request){
        $incomingFields = $request->validate([
            'firstname'=> 'required',
            'lastname'=> 'required',
            'gender'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required',
            'confirmPassword'=> 'required|same:password'
            ]);
        
        return 'Hello';
    }
}
