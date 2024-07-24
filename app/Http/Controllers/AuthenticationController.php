<?php

namespace App\Http\Controllers;

use App\DTO\LoginDTO\LoginInputDTO;
use App\Http\Requests\LoginRequest;
use App\Http\Responses\FormatResponse;
use App\Services\AuthenticationService;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    private AuthenticationService $authenticationService;

    public function __construct(AuthenticationService $authenticationService)
    {
        $this->authenticationService = $authenticationService;
    }

    public function login(LoginRequest $loginRequest)
    {
        try {
            $loginRequest->validated();

            $loginDto = new LoginInputDTO(
                $loginRequest->input('email'),
                $loginRequest->input('password')
            );

            $output = $this->authenticationService->login($loginDto);

            return FormatResponse::ok($output->toArray());
        } catch (\Exception $ex) {
            return FormatResponse::badRequest([], $ex->getMessage());
        }
    }
}
