<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\Command;

/**
 * Delete specific price to a Product
 */
class DeleteSpecificPriceCommand
{
    /**
     * @var SpecificPriceId
     */
    protected $specificPriceId;
    /**
     * DeleteSpecificPriceCommand constructor.
     *
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
