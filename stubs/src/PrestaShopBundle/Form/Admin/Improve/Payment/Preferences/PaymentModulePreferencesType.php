<?php

namespace PrestaShopBundle\Form\Admin\Improve\Payment\Preferences;

/**
 * Class PaymentModulePreferencesType defines form in "Improve > Payment > Preferences" page.
 */
class PaymentModulePreferencesType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param array $paymentModules
     * @param array $countryChoices
     * @param array $groupChoices
     * @param array $carrierChoices
     * @param array $currencyChoices
     * @param CountryDataProvider $countryDataProvider
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, array $paymentModules, array $countryChoices, array $groupChoices, array $carrierChoices, array $currencyChoices, \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider $countryDataProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
