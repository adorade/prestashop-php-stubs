<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject;

class SpecificPriceId
{
    /**
     * @param int $specificPriceId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\Exception\SpecificPriceConstraintException
     */
    public function __construct(int $specificPriceId)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
