<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject;

/**
 *  Holds product combination identification data
 */
class CombinationId implements \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationIdInterface
{
    /**
     * @param int $combinationId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Combination\Exception\CombinationConstraintException
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
