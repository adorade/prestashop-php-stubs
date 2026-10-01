<?php

namespace PrestaShopBundle\Form\Admin\Type;

class CarrierChoiceType extends \Symfony\Component\Form\AbstractType
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $carrierChoiceProvider, private readonly \PrestaShop\PrestaShop\Core\Image\ImageProviderInterface $carrierLogoProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getParent(): string
    {
    }
}
