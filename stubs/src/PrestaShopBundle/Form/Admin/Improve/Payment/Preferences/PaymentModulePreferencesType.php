<?php

namespace PrestaShopBundle\Form\Admin\Improve\Payment\Preferences;

/**
 * Class PaymentModulePreferencesType defines form in "Improve > Payment > Preferences" page.
 */
class PaymentModulePreferencesType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param array $locales
     * @param array $paymentModules
     * @param array $countryChoices
     * @param array $groupChoices
     * @param array $carrierChoices
     * @param \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\CurrencyByIdChoiceProvider $currencyChoicesProvider
     * @param \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider $countryDataProvider
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, array $paymentModules, array $countryChoices, array $groupChoices, array $carrierChoices, \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\CurrencyByIdChoiceProvider $currencyChoicesProvider, \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider $countryDataProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
