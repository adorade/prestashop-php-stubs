<?php

namespace PrestaShopBundle\Form;

class FormHelper
{
    public const DEFAULT_PRICE_PRECISION = 6;
    public const DEFAULT_WEIGHT_PRECISION = 6;
    /**
     * Format legacy data list to mapping SF2 form field choice.
     *
     * @param array $list
     * @param string $mapping_value
     * @param string $mapping_name
     *
     * @return array
     */
    public static function formatDataChoicesList($list, $mapping_value = 'id', $mapping_name = 'name')
    {
    }
}
