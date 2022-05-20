<?php

namespace App\Requests;

use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;

class StoreTicketMessageRequest extends BaseRequest
{
    #[Type('string')]
    #[NotBlank()]
    protected string $content;
}