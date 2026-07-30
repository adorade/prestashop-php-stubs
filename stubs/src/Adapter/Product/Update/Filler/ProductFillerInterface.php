<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Update\Filler;

/**
 * Responsible for filling up the Product with the properties which have to be updated
 */
interface ProductFillerInterface
{
    /**
     * Fill product properties from the command and return an array of the properties to update.
     *
     * Returns a list of properties that were filled.
     * Simple (not multilingual) fields will be provided in a simple array as a values, while for
     * multilingual ones the array key will be the field name and the value will be an array of language ids.
     *
     * @return array<int|string, string|array<string|int, int|string>>
     *
     * e.g.:
     * [
     *     'reference',
     *     'visibility',
     *     'name' => [1, 2],
     * ]
     */
    public function fillUpdatableProperties(\Product $product, \PrestaShop\PrestaShop\Core\Domain\Product\Command\UpdateProductCommand $command): array;
}
