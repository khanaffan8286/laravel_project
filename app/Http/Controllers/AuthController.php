<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $user = Employe::where('email', $request->email)->first();

       if ($user && $request->password === $user->password) {
            // Authentication passed
            Session::put('user', $user);
            return view('view-detail');
        } else {
            // Authentication failed
            return back()->withErrors([
                'login' => 'Invalid email or password.',
            ])->withInput();
        }
    }
}
