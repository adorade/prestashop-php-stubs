<?php

namespace PrestaShopBundle\Form\Admin\Sell\Discount;

class CartConditionsType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public const NONE = 'none';
    public const MINIMUM_AMOUNT = 'minimum_amount';
    public const MINIMUM_PRODUCT_QUANTITY = 'minimum_product_quantity';
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    public function getParent()
    {
    }
}
