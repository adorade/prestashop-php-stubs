<?php

namespace PrestaShop\PrestaShop\Core\Product\Combination\Generator;

/**
 * Generates combinations of attributes
 */
class CombinationGenerator implements \PrestaShop\PrestaShop\Core\Product\Combination\Generator\CombinationGeneratorInterface
{
    /**
     * {@inheritdoc}
     *
     * Yields combinations, where each combination contains a list of all possible attribute ids indexed by group id
     */
    public function generate(array $attributesByGroups): \Iterator
    {
    }
}
