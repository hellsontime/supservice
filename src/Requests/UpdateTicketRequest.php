<?php

namespace App\Requests;

use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Validator\Constraints\Length;

class UpdateTicketRequest extends BaseRequest
{
    #[Type('string')]
    #[NotBlank()]
    #[Length(null, null, 140)]
    protected string $title;

    #[Type('string')]
    #[NotBlank()]
    protected string $description;
}