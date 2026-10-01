<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\Command;

class ResetEmployeePasswordCommand
{
    public function __construct(private readonly string $resetToken, private readonly string $password)
    {
    }
    public function getResetToken(): string
    {
    }
    public function getPassword(): string
    {
    }
}
