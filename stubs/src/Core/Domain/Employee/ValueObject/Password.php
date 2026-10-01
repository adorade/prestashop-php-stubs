<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject;

/**
 * Stores employee's plain password.
 */
class Password
{
    /**
     * @var int Minimum required password length for employee
     */
    public const MIN_LENGTH = 8;
    /**
     * @param string $password
     * @param int $minLength
     * @param int $maxLength
     * @param int $minScore
     */
    public function __construct(string $password, int $minLength, int $maxLength, int $minScore)
    {
    }
    /**
     * @return string
     */
    public function getValue()
    {
    }
}
