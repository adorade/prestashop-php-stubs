<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * This subclass contains common functions for specific Form types needs.
 */
abstract class CommonAbstractType extends \Symfony\Component\Form\AbstractType
{
    public const PRESTASHOP_DECIMALS = 6;
    public const PRESTASHOP_WEIGHT_DECIMALS = 6;
    /**
     * Get the configuration adapter.
     *
     * @deprecated Since 8.1 Use dependency injection in your form type instead.
     *
     * @return Configuration Configuration adapter
     */
    protected function getConfiguration()
    {
    }
    /**
     * Format legacy data list to mapping SF2 form field choice.
     *
     * @param array $list
     * @param string $mapping_value
     * @param string $mapping_name
     *
     * @return array
     */
    protected function formatDataChoicesList($list, $mapping_value = 'id', $mapping_name = 'name')
    {
    }
    /**
     * Format legacy data list to mapping SF2 form field choice (possibility to have 2 name equals).
     *
     * @param array $list
     * @param string $mapping_value
     * @param string $mapping_name
     *
     * @return array
     */
    protected function formatDataDuplicateChoicesList($list, $mapping_value = 'id', $mapping_name = 'name')
    {
    }
}
