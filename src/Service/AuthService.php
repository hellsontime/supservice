<?php

namespace App\Service;

use App\Repository\AuthRepository;
use App\Repository\UserRepository;

class AuthService extends BaseService implements AuthServiceInterface
{
    private AuthRepository $_authRepository;
    private UserRepository $_userRepository;

    public function __construct(AuthRepository $authRepository, UserRepository $userRepository)
    {
        $this->_authRepository = $authRepository;
        $this->_userRepository = $userRepository;
    }

    public function register(array $requestBody)
    {
        $user = $this->_userRepository->findOneBy([
           'email' => $requestBody['email'],
        ]);

        if (!is_null($user)) {
            return $this->response(['message' => 'Email is already taken'], 409);
        }

        $data = $this->_authRepository->register($requestBody);

        return $this->response($data, 201);
    }

//    public function login($fields)
//    {
//        return $this->_authRepository->login($fields);
//    }
//
//    public function logout($request)
//    {
//        return $this->_authRepository->logout($request);
//    }
}
