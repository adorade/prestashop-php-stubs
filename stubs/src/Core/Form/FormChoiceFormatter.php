<?php

namespace PrestaShop\PrestaShop\Core\Form;

/**
 * Class that formats choices for Symfony forms.
 */
class FormChoiceFormatter
{
    /**
     * Returns a choice list in a format required for Symfony form.
     * Symfony form choice fields accept array with options, where the item name
     * is the key and item ID is the value.
     *
     * So, when there are two items with the same name, they get lost.
     * This will automatically mark duplicate options with their ID.
     *
     * @param array $rawChoices Raw array with data to build the options from
     * @param string $idKey Key name of the item IDs, id_carrier for example
     * @param string $nameKey Key name of the item NAMEs, carrier_name for example
     * @param bool $sortByName Should the list be automatically sorted by name
     *
     * @return array Formatted choices
     */
    public static function formatFormChoices(array $rawChoices, string $idKey, string $nameKey, bool $sortByName = true): array
    {
    }
    /*
     * Renames a given array key without modifying it's position in the array.
     *
     * @param array $array Array to work on
     * @param string $oldKey Old array key
     * @param string $newKey New array key
     *
     * @return array Array with changed key
     */
    public static function replaceArrayKey($array, $oldKey, $newKey): array
    {
    }
}
