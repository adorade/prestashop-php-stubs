<?php

namespace PrestaShop\PrestaShop\Core\Email;

class SwiftMailerValidation implements \Egulias\EmailValidator\Validation\EmailValidation
{
    /**
     * {@inheritdoc}
     */
    public function isValid(string $email, \Egulias\EmailValidator\EmailLexer $emailLexer): bool
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getError(): ?\Egulias\EmailValidator\Result\InvalidEmail
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getWarnings(): array
    {
    }
}
