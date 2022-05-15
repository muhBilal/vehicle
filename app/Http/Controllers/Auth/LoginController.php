<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request){
        $user = User::where('email', $request->email)->first();

        if (!$user || !password_verify($request['password'], $user->password))throw new Exception("invalid");

        $error = \Illuminate\Validation\ValidationException::withMessages([
            'field_name_1' => ['Validation Message #1'],
            'field_name_2' => ['Validation Message #2'],
         ]);

        try{
            $data['token'] = JWTAuth::fromUser($user);
            return $data;
        }catch (JWTAuth $e){
            throw new Exception("failed");
        }

        return response()->json(compact('token'));
    }
}
