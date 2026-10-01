<?php

namespace PrestaShopBundle\Form\Admin\Type;

class TaxInclusionChoiceType extends \Symfony\Component\Form\AbstractType
{
    public function __construct(\PrestaShop\PrestaShop\Core\Form\ChoiceProvider\TaxInclusionChoiceProvider $shippingInclusionChoiceProvider)
    {
    }
    public function getParent(): string
    {
    }
    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
}
