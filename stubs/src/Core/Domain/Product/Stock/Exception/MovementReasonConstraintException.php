<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Stock\Exception;

class MovementReasonConstraintException extends \PrestaShop\PrestaShop\Core\Domain\Product\Stock\Exception\ProductStockException
{
    /**
     * Thrown when invalid movement reason id is provided
     */
    public const INVALID_ID = 10;
}
