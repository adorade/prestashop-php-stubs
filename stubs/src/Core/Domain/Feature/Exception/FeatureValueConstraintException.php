<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\Exception;

/**
 * Thrown when feature value constraints are violated
 */
class FeatureValueConstraintException extends \PrestaShop\PrestaShop\Core\Domain\Feature\Exception\FeatureValueException
{
    /**
     * Used when feature ID is invalid
     */
    public const INVALID_FEATURE_ID = 10;
    /**
     * Used when value is invalid
     */
    public const INVALID_VALUE = 20;
}
