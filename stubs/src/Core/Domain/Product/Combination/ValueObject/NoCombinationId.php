<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject;

/**
 * Indicates that no combination was specified
 */
class NoCombinationId implements \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationIdInterface
{
    /**
     * Value when no combination is specified
     */
    public const NO_COMBINATION_ID = 0;
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
