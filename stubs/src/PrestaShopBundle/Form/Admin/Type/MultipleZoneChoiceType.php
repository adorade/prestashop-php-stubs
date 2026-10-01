<?php

namespace PrestaShopBundle\Form\Admin\Type;

class MultipleZoneChoiceType extends \Symfony\Component\Form\AbstractType
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $zonesChoiceProvider)
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
