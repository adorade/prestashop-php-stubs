<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\Exception;

/**
 * Thrown when constraints specific to Combination are violated
 */
class CombinationConstraintException extends \PrestaShop\PrestaShop\Core\Domain\Product\Combination\Exception\CombinationException
{
    /**
     * When combination id is invalid
     */
    public const INVALID_ID = 1;
}
