<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Requests\Auth\RegisterRequest;
use Exception;


class UserController extends Controller
{
    public function index(Request $request){
        return response()->json(Auth::user()) ;
    }

    public function Register(RegisterRequest $request){
        $regis = User::create([
            'email' => request('email'),
            'password'=>bcrypt(request('password')),
        ]);

        return response()->json("Succes");
    }

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
