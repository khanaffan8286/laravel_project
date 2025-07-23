<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\Check;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

      public function login(requsest $request)
    {
        validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if($validate){
            $user = Employe::where('email', $request->email)->first();
            if ($user && Hash::Check($request->password, $user->password)) {
                // Authentication passed
                session(['user' => $user]);
                return view('view-details');
            }


        }
        else{
            return view('login');
        }
    }
}
