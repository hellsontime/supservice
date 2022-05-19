<?php

namespace App\Repository;

use App\Entity\User;
use App\Requests\RegisterAuthRequest;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Validator\Constraints\EmailValidator;

class AuthRepository implements AuthRepositoryInterface
{
    private UserRepository $_userRepository;
    private UserPasswordHasherInterface $_userPasswordHasher;

    public function __construct(UserRepository $userRepository, UserPasswordHasherInterface $userPasswordHasher)
    {
        $this->_userRepository = $userRepository;
        $this->_userPasswordHasher = $userPasswordHasher;
    }

    public function register(array $requestBody)
    {
        $user = new User();

        $user->setEmail($requestBody['email']);
        $user->setPassword($this->_userPasswordHasher->hashPassword(
            $user,
            $requestBody['password'])
        );
        $user->setRoles(['ROLE_USER']);

        $this->_userRepository->add($user, true);

        return ["message" => "User registered successfully"];
    }

//    public function login(LoginAuthRequest $fields)
//    {
//        //check email
//        $user = $this->_user->where('email', $fields['email'])->first();
//
//        //check password
//        if (!$user || !Hash::check($fields['password'], $user->password)) {
//            return response([
//                'message' => 'Invalid Username or Password!'
//            ], 401);
//        }
//
//        $token = $user->createToken('wcgtoken')->plainTextToken;
//
//        $response = [
//            'user' => $user->toArray(),
//            'token' => $token,
//        ];
//
//        return response($response, 201);
//    }
//
//    public function logout(Request $request)
//    {
//        auth()->user()->tokens()->delete();
//
//        return [
//            'message' => 'Logged out.',
//        ];
//    }
}
