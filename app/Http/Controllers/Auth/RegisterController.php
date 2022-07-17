<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(RegisterRequest $registerRequest)
    {
        $user = User::create([
            'first_name' => $registerRequest['first_name'],
            'last_name' => $registerRequest['last_name'],
            'email' => $registerRequest['email'],
            'password' => bcrypt($registerRequest['passwod']),
            'role_id' => 1
        ]);

        $token = $user->createToken('my-tokken')->plainTextToken;
        $responseData = [
            'user' => $user,
            'token' => $token
        ];

        return \response($responseData, 201);
    }
}
