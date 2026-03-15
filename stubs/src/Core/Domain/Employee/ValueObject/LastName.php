<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject;

/**
 * Stores employee's last name
 */
class LastName
{
    /**
     * @var int Maximum allowed length for last name
     */
    public const MAX_LENGTH = 255;
    /**
     * @param string $lastName
     */
    public function __construct($lastName)
    {
    }
    /**
     * @return string
     */
    public function getValue()
    {
    }
}
