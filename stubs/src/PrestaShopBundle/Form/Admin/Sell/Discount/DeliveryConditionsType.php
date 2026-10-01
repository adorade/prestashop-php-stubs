<?php

namespace PrestaShopBundle\Form\Admin\Sell\Discount;

class DeliveryConditionsType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public const NONE = 'none';
    public const CARRIERS = 'carriers';
    public const COUNTRY = 'country';
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    public function getParent()
    {
    }
}
