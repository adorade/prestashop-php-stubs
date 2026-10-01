<?php

namespace PrestaShop\PrestaShop\Core\Domain\Webservice\ValueObject;

/**
 * Encapsulates webservice key value
 */
class Key
{
    /**
     * @var int Required length of webservice key
     */
    public const LENGTH = 32;
    /**
     * @param string $key
     */
    public function __construct($key)
    {
    }
    /**
     * @return string
     */
    public function getValue()
    {
    }
}
