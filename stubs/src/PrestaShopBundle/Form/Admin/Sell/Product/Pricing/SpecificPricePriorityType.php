<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Pricing;

class SpecificPricePriorityType extends \Symfony\Component\Form\Extension\Core\Type\CollectionType
{
    /**
     * @param FormChoiceProviderInterface $priorityChoiceProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $priorityChoiceProvider)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
