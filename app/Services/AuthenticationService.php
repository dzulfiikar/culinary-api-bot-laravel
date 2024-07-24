<?php

namespace App\Services;

use App\DTO\LoginDTO\LoginInputDTO;
use App\DTO\LoginDTO\LoginOutputDTO;
use Exception;
use Illuminate\Support\Facades\Auth;

class AuthenticationService
{


    public function login(LoginInputDTO $loginInputDTO): LoginOutputDTO
    {
        $creds = [
            "email" => $loginInputDTO->email,
            "password" => $loginInputDTO->password
        ];


        if (!Auth::attempt($creds)) {
            throw new Exception("Invalid email or password");
        }

        $user = Auth::user();

        $accessToken = $user->createToken('accessToken')->accessToken;

        return new LoginOutputDTO($user, $accessToken);
    }
}
