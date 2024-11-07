<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login(Request $request){
        $incomingFields = $request->validate([
        'email' => 'required',
        'password' => 'required'
        ]);
        
        if (auth()->attempt(['email' => $incomingFields ['email'], 'password' => $incomingFields['password']])) {
            $request->session()->regenerate();

        }
        
        return redirect('/dashboard');
    }
    
    

    public function logout(){
        auth()->logout();
        return redirect('/login');
    }

    public function register(Request $request){
        $incomingFields = $request->validate([
            'firstname'=> 'required',
            'lastname'=> 'required',
            'gender'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required',
            ]);
            
            $incomingFields['password'] = bcrypt($incomingFields['password']);
            $user = User::create($incomingFields);
            auth()->login($user);
            return redirect('/register');
    }
}
