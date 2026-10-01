<?php

namespace PrestaShopBundle\Form\Admin\Sell\Discount;

class DiscountConditionsType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public const PRODUCT_CONDITIONS = 'product';
    public const CART_CONDITIONS = 'cart';
    public const DELIVERY_CONDITIONS = 'delivery';
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
