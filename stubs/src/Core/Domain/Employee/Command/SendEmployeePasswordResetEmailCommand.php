<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\Command;

class SendEmployeePasswordResetEmailCommand
{
    public function __construct(string $email)
    {
    }
    public function getEmail(): \PrestaShop\PrestaShop\Core\Domain\ValueObject\Email
    {
    }
}
