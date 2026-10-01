<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * This subclass contains common functions for specific Form types needs.
 *
 * @deprecated since 9.0 use \Symfony\Component\Form\AbstractType instead
 */
abstract class CommonAbstractType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @deprecated since 9.0
     */
    public const PRESTASHOP_DECIMALS = \PrestaShopBundle\Form\FormHelper::DEFAULT_PRICE_PRECISION;
    /**
     * @deprecated since 9.0
     */
    public const PRESTASHOP_WEIGHT_DECIMALS = \PrestaShopBundle\Form\FormHelper::DEFAULT_WEIGHT_PRECISION;
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
