<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\Exception;

/**
 * Thrown when Feature data is not valid.
 */
class FeatureConstraintException extends \PrestaShop\PrestaShop\Core\Domain\Feature\Exception\FeatureException
{
    /**
     * Code is used when feature does not have name.
     */
    public const EMPTY_NAME = 1;
    /**
     * Used when feature name is invalid.
     */
    public const INVALID_NAME = 2;
}
