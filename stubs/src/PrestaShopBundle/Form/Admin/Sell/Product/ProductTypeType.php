<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product;

class ProductTypeType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface|\PrestaShop\PrestaShop\Core\Form\FormChoiceAttributeProviderInterface $formChoiceProvider
     */
    public function __construct($formChoiceProvider)
    {
    }
    public function getParent(): string
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
    public function getBlockPrefix(): string
    {
    }
}
