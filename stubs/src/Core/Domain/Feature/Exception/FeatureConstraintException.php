<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\Exception;

/**
 * Thrown when Feature data is not valid.
 */
class FeatureConstraintException extends \PrestaShop\PrestaShop\Core\Domain\Feature\Exception\FeatureException
{
    public const INVALID_ID = 1;
    public const INVALID_NAME = 2;
    public const INVALID_POSITION = 3;
    public const INVALID_SHOP_ASSOCIATION = 4;
}
