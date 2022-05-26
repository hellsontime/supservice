<?php

namespace App\Requests;

use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\NotBlank;

class UpdateTicketStatusRequest extends BaseRequest
{
    #[Choice(
        choices: ['opened', 'closed', 'frozen'],
        message: 'Choose a valid status.',
    )]
    #[NotBlank()]
    protected string $status;
}