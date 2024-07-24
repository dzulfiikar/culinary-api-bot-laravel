<?php

namespace App\DTO\LoginDTO;

use App\Models\User;

class LoginOutputDTO
{
    public User $user;
    public string $accessToken;

    public function __construct(User $user, string $accessToken)
    {
        $this->user = $user;
        $this->accessToken = $accessToken;
    }

    public function toArray()
    {
        return [
            "user" => $this->user,
            "access_token" => $this->accessToken
        ];
    }
}
