<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\Query;

/**
 * Query which provides specific price for editing
 */
class GetSpecificPriceForEditing
{
    /**
     * @param int $specificPriceId
     */
    public function __construct(int $specificPriceId)
    {
    }
    /**
     * @return SpecificPriceId
     */
    public function getSpecificPriceId(): \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject\SpecificPriceId
    {
    }
}
