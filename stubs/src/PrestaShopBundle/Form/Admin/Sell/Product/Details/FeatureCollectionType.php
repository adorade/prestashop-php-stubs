<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Details;

class FeatureCollectionType extends \Symfony\Component\Form\Extension\Core\Type\CollectionType
{
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    /**
     * Change block prefix for theme override.
     *
     * @return string
     */
    public function getBlockPrefix(): string
    {
    }
}
