<?php

namespace App\Controller;

use App\Requests\RegisterAuthRequest;
use App\Service\AuthService;
use Symfony\Component\Routing\Annotation\Route;

class AuthController extends BaseController
{
    private AuthService $_authService;

    public function __construct(AuthService $authService)
    {
        $this->_authService = $authService;
    }

    /**
     * @param RegisterAuthRequest $request
     * @return mixed
     * @Route("/api/register", name="auth-register", methods={"POST"})
     */
    public function register(RegisterAuthRequest $request)
    {
        $requestBody = $this->getRequestBody($request);

        return $this->_authService->register($requestBody);
    }

//    public function login(LoginAuthRequest $fields)
//    {
//       return $this->_authService->login($fields);
//    }
//
//    public function logout(Request $request)
//    {
//        return $this->_authService->logout($request);
//    }
}
