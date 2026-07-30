<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject;

/**
 * Carries employee's first name
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
