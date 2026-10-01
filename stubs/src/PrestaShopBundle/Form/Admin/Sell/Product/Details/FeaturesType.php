<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Details;

class FeaturesType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\FeaturesChoiceProvider $featuresChoiceProvider, \Symfony\Component\Routing\Generator\UrlGeneratorInterface $urlGenerator)
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
