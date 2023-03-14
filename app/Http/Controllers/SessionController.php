<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create(LoginRequest $request){

        $remember = $request->input('remember');
        
        if(Auth::attempt($request->credentials, $remember)){
            return redirect()->intended();
        }
        
        return back()->withErrors([
            'email' => 'The provided credentials are wrong'
        ]);
    }
}
