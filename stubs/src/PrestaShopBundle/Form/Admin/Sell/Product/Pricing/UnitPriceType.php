<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Pricing;

class UnitPriceType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param Currency $defaultCurrency
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \Currency $defaultCurrency)
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
