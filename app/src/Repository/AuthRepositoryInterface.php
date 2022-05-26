<?php

namespace App\Repository;

use App\Requests\RegisterAuthRequest;

interface AuthRepositoryInterface
{
    public function register(array $requestBody);
//    public function login(LoginAuthRequest $fields);
//    public function logout(Request $request);
}
