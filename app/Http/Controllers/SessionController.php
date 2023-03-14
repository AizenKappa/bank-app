<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

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

    public function register(Request $request){
      
        $data = $request->only('name','email','password','password_confirmation');
        $rules  = [
            'name'=>['required','unique:users,name'],
            'email'=>['required','unique:users,email'],
            'password'=>['required','confirmed',Password::min(8)],
        ];
        $messages=[
            'name.required'=>'You forget the name'
        ];
        $attributes = [
            'email'=>'email address'
        ];

        $credentials = Validator::make($data,$rules,$messages,$attributes)->validate();
        
        //Or Change the setter in the model 
        // $credentials['password'] = bcrypt($credentials['password']);

        User::create($credentials);

        return redirect('/login');
    }

    public function destroy(Request $request){
        Auth::logout();
        return redirect()->route('login');
    }
}
