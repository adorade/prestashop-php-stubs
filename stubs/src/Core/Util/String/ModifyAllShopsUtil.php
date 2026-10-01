<?php

namespace PrestaShop\PrestaShop\Core\Util\String;

class ModifyAllShopsUtil
{
    /**
     * Adds a prefix to a last element of provided field path.
     * Field path elements expected to be separated by "[]".
     * It is used, for example, to prefix a form field with a "modify_all_shops_"
     * to avoid doing it manual for every multiShop field form.
     *
     * If it doesn't find any matches, it will return the same string $fieldPath.
     *
     * E.g. if you provide $fieldPath = '[stock][delta_quantity][delta]' and $prefix = 'modify_all_shops_'
     * then the result will be '[stock][delta_quantity][modify_all_shops_delta]'
     *
     * @param string $fieldPath
     * @param string $allShopsPrefix
     *
     * @return string
     */
    public static function prefixFieldPathWithAllShops(string $fieldPath, string $allShopsPrefix): string
    {
    }
}
