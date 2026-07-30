<?php

namespace PrestaShop\PrestaShop\Core\Domain\SpecificPrice\ValueObject;

/**
 * @deprecated since 8.0.0 and will be removed in the next major version.
 * @see ProductSpecificPriceId
 */
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
