<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject;

/**
 * Stores customer's first name
 */
class FirstName
{
    /**
     * @var int Maximum allowed length for first name
     */
    public const MAX_LENGTH = 255;
    /**
     * @param string $firstName
     */
    public function __construct($firstName)
    {
    }
    /**
     * @return string
     */
    public function getValue()
    {
    }
}
