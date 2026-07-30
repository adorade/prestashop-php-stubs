<?php

namespace PrestaShop\PrestaShop\Core\Security;

class PasswordGenerator
{
    public const PASSWORDGEN_FLAG_NUMERIC = 'NUMERIC';
    public const PASSWORDGEN_FLAG_NO_NUMERIC = 'NO_NUMERIC';
    public const PASSWORDGEN_FLAG_RANDOM = 'RANDOM';
    public const PASSWORDGEN_FLAG_ALPHANUMERIC = 'ALPHANUMERIC';
    public function __construct(\PrestaShop\PrestaShop\Core\Security\OpenSsl\OpenSSLInterface $cryptography)
    {
    }
    /**
     * Random password generator.
     *
     * @param int $length Desired length (optional)
     * @param string $type Output type (NUMERIC, ALPHANUMERIC, NO_NUMERIC, RANDOM)
     *
     * @return string Password
     */
    public function generatePassword(int $length = 8, string $type = self::PASSWORDGEN_FLAG_ALPHANUMERIC): string
    {
    }
}
