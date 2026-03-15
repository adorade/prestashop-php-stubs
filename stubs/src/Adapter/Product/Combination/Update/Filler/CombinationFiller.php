<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\Update\Filler;

/**
 * This class wraps up all the product property fillers and merges the updatable properties into a single array.
 * It is intentional that this class doesn't have the same tag as all the internal property fillers.
 *
 * All the internal property fillers are split just to contain less code and be more readable (because the Product contains many of properties).
 */
class CombinationFiller implements \PrestaShop\PrestaShop\Adapter\Product\Combination\Update\Filler\CombinationFillerInterface
{
    /**
     * @param CombinationFillerInterface[] $updatablePropertyFillers
     */
    public function __construct(iterable $updatablePropertyFillers)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function fillUpdatableProperties(\Combination $combination, \PrestaShop\PrestaShop\Core\Domain\Product\Combination\Command\UpdateCombinationCommand $command): array
    {
    }
}
