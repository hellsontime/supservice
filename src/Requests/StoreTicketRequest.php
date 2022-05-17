<?php

namespace App\Requests;

use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;

class StoreTicketRequest extends BaseRequest
{
    #[Type('string')]
    #[NotBlank()]
    protected string $title;

    #[Type('string')]
    #[NotBlank()]
    protected string $description;
}