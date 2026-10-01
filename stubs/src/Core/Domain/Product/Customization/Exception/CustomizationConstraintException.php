<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Customization\Exception;

/**
 * Thrown when customization constraints are violated
 */
class CustomizationConstraintException extends \PrestaShop\PrestaShop\Core\Domain\Product\Customization\Exception\CustomizationException
{
    /**
     * When customization field is required to be filled
     */
    public const FIELD_IS_REQUIRED = 1;
    /**
     * When customization field value length is exceeded
     */
    public const FIELD_IS_TOO_LONG = 2;
    /**
     * When customization id is invalid
     */
    public const INVALID_ID = 3;
}
