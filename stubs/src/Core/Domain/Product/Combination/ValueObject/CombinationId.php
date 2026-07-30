<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject;

/**
 *  Holds product combination identification data
 */
class CombinationId implements \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationIdInterface
{
    /**
     * Indicates that no combination is provided/selected
     *
     * @deprecated since 8.0.0 and will be removed in next major version.
     * @see NoCombinationId instead
     */
    public const NO_COMBINATION = 0;
    /**
     * @param int $combinationId
     *
     * @throws CombinationConstraintException
     */
    public function __construct(int $combinationId)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
