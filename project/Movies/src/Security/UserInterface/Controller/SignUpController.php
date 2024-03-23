<?php

declare(strict_types=1);

namespace App\Security\UserInterface\Controller;

use Symfony\Component\HttpFoundation\Response;

final class SignUpController
{
    public function __invoke(): Response
    {
        return new Response('Test');
    }
}