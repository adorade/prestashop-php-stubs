<?php

namespace PrestaShopBundle\Form\Admin\Type;

class TaxGroupChoiceType extends \Symfony\Component\Form\AbstractType
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $taxGroupChoiceProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
    }
}
