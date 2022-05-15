<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){

        request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        User::create([
            'email' => request('email'),
            'password'=>bcrypt(request('password')),
        ]);

        return response()->json();
    }
}
