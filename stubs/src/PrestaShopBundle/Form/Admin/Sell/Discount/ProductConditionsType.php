<?php

namespace PrestaShopBundle\Form\Admin\Sell\Discount;

class ProductConditionsType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public const NONE = 'none';
    public const CHEAPEST_PRODUCT = 'cheapest_product';
    public const SPECIFIC_PRODUCTS = 'specific_products';
    public const PRODUCT_SEGMENT = 'product_segment';
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
    public function getParent()
    {
    }
}
