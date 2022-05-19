<?php

namespace App\Requests;

use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;

class RegisterAuthRequest extends BaseRequest
{
    #[Type('string')]
    #[NotBlank()]
    #[Email()]
    #[Length(null, 7, 32)]
    protected string $email;

    #[Type('string')]
    #[NotBlank()]
    #[Length(null, 4, 32)]
    protected string $password;
}