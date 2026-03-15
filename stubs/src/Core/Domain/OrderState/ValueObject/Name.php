<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderState\ValueObject;

/**
 * Stores order state's name
 */
class Name
{
    /**
     * @var int Maximum allowed length for name
     */
    public const MAX_LENGTH = 255;
    /**
     * @param string $name
     */
    public function __construct($name)
    {
    }
    /**
     * @return string
     */
    public function getValue()
    {
    }
}
