<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Details;

class FeatureValueType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $featuresChoiceProvider, \Symfony\Component\EventDispatcher\EventSubscriberInterface $featureValueListener)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
