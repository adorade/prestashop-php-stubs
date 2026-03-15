<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Shipping;

class DimensionsType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param string $dimensionUnit
     * @param string $weightUnit
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, string $dimensionUnit, string $weightUnit)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
