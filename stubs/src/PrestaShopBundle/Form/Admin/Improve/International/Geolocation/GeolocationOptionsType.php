<?php

namespace PrestaShopBundle\Form\Admin\Improve\International\Geolocation;

/**
 * Class GeolocationOptionsType is responsible for handling "Improve > International > Localization > Geolocation"
 * geolocation options form.
 */
class GeolocationOptionsType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param array $countryChoices
     * @param ConfigurationInterface $configuration
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, array $countryChoices, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
