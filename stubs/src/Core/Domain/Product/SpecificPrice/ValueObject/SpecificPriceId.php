<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject;

class SpecificPriceId
{
    /**
     * @param int $specificPriceId
     *
     * @throws SpecificPriceConstraintException
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
