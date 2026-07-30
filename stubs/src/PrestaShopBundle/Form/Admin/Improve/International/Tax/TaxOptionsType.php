<?php

namespace PrestaShopBundle\Form\Admin\Improve\International\Tax;

/**
 * Defines "Improve > International > Taxes" options form
 */
class TaxOptionsType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * TaxOptionsType constructor.
     *
     * Backwards compatibility break introduced in 1.7.8.0 due to extension of TranslatorAwareType
     *
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param bool $ecoTaxEnabled
     * @param FormChoiceProviderInterface $taxAddressTypeChoiceProvider
     * @param FormChoiceProviderInterface $taxRuleGroupChoiceProvider
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, $ecoTaxEnabled, \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $taxAddressTypeChoiceProvider, \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $taxRuleGroupChoiceProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @see MultistoreConfigurationTypeExtension
     */
    public function getParent(): string
    {
    }
}
