<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Customization\Exception;

/**
 * Thrown when customization field constraints are violated
 */
class CustomizationFieldConstraintException extends \PrestaShop\PrestaShop\Core\Domain\Product\Customization\Exception\CustomizationFieldException
{
    /**
     * When Customization field id is invalid
     */
    public const INVALID_ID = 1;
    /**
     * When customization type is invalid
     */
    public const INVALID_TYPE = 2;
    /**
     * When customization field name is invalid
     */
    public const INVALID_NAME = 3;
}
