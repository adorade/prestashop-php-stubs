<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\Command;

class RemoveAllCombinationImagesCommand
{
    /**
     * @param int $combinationId
     */
    public function __construct(int $combinationId)
    {
    }
    /**
     * @return CombinationId
     */
    public function getCombinationId(): \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId
    {
    }
}
