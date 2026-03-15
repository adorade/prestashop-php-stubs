<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\Update\Filler;

/**
 * Responsible for filling up the Combination with the properties which have to be updated
 */
interface CombinationFillerInterface
{
    /**
     * Fill combination properties from the command and return an array of the properties to update.
     *
     * Returns a list of properties that were filled.
     * Simple (not multilingual) fields will be provided in a simple array as a values, while for
     * multilingual ones the array key will be the field name and the value will be an array of language ids.
     *
     * @return array<int, string|array<string, int>>
     *
     * e.g.:
     * [
     *     'reference',
     *     'visibility',
     *     'name' => [1, 2],
     * ]
     */
    public function fillUpdatableProperties(\Combination $combination, \PrestaShop\PrestaShop\Core\Domain\Product\Combination\Command\UpdateCombinationCommand $command): array;
}
