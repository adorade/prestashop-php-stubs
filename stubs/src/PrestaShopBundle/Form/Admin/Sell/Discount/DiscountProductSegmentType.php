<?php

namespace PrestaShopBundle\Form\Admin\Sell\Discount;

class DiscountProductSegmentType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public const CATEGORY = 'category';
    public const MANUFACTURER = 'manufacturer';
    public const FEATURES = 'features';
    public const SUPPLIER = 'supplier';
    public const ATTRIBUTES = 'attributes';
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
