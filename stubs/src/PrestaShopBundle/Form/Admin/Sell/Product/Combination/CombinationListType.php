<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Combination;

/**
 * Form uses collection of combination items and so it can be rendered as a grid consisting of submittable inputs.
 */
class CombinationListType extends \Symfony\Component\Form\Extension\Core\Type\CollectionType
{
    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
    }
}
