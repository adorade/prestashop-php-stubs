<?php

namespace PrestaShop\PrestaShop\Core\Product\Combination\Generator;

/**
 * Responsible for generating all possible combinations of product attribute ids
 */
interface CombinationGeneratorInterface
{
    /**
     * @param array[] $attributesByGroups
     *
     * @return Iterator
     */
    public function generate(array $attributesByGroups): \Iterator;
}
