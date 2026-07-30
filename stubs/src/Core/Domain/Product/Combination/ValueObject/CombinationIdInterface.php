<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject;

/**
 * Defines contract for combination identity value
 */
interface CombinationIdInterface
{
    /**
     * @return int
     */
    public function getValue(): int;
}
