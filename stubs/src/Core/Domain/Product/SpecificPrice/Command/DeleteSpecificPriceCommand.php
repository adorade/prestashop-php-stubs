<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\Command;

/**
 * Delete specific price to a Product
 */
class DeleteSpecificPriceCommand
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject\SpecificPriceId
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
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject\SpecificPriceId
     */
    public function getSpecificPriceId(): \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject\SpecificPriceId
    {
    }
}
