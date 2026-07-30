<?php

namespace PrestaShopBundle\Form\Admin\Improve\International\Localization;

/**
 * Class LocalizationConfigurationType is responsible for building 'Improve > International > Localization' page
 * 'Configuration' form.
 */
class LocalizationConfigurationType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param array $languageChoices
     * @param array $countryChoices
     * @param array $currencyChoices
     * @param array $timezoneChoices
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, array $languageChoices, array $countryChoices, array $currencyChoices, array $timezoneChoices)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
