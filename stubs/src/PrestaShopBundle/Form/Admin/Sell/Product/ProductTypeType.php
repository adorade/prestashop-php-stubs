<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product;

class ProductTypeType extends \Symfony\Component\Form\Extension\Core\Type\ChoiceType
{
    /**
     * @param FormChoiceProviderInterface|FormChoiceAttributeProviderInterface $formChoiceProvider
     */
    public function __construct($formChoiceProvider)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
