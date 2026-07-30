<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\Update\Filler;

/**
 * Fills combination properties which can be considered as combination details
 */
class PricesFiller implements \PrestaShop\PrestaShop\Adapter\Product\Combination\Update\Filler\CombinationFillerInterface
{
    /**
     * {@inheritDoc}
     */
    public function fillUpdatableProperties(\Combination $combination, \PrestaShop\PrestaShop\Core\Domain\Product\Combination\Command\UpdateCombinationCommand $command): array
    {
    }
}
