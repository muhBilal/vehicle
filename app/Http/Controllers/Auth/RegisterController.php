<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(RegisterRequest $request){
        $regis = User::create([
            'email' => request('email'),
            'password'=>bcrypt(request('password')),
        ]);

        return response()->json("Succes");
    }
}
