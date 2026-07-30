<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject;

/**
 * Defines rules for customer birthday and stores it's value
 */
class Birthday
{
    /**
     * @var string empty birthday value
     *
     * It is used as a placeholder value when real birthday is not provided
     */
    public const EMPTY_BIRTHDAY = '0000-00-00';
    /**
     * @return Birthday
     */
    public static function createEmpty()
    {
    }
    /**
     * @param string $birthday
     */
    public function __construct($birthday)
    {
    }
    /**
     * @return string
     */
    public function getValue()
    {
    }
    /**
     * @return bool
     */
    public function isEmpty()
    {
    }
}
