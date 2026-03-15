<?php

namespace PrestaShopBundle\Form\Admin\Sell\CatalogPriceRule;

/**
 * Defines catalog price rule form for create/edit actions
 */
class CatalogPriceRuleType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @param TranslatorInterface $translator
     * @param bool $isMultishopEnabled
     * @param array $currencyByIdChoices
     * @param array $countryByIdChoices
     * @param array $groupByIdChoices
     * @param array $shopByIdChoices
     * @param array $currencyByIdChoicesAttributes
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, bool $isMultishopEnabled, array $currencyByIdChoices, array $countryByIdChoices, array $groupByIdChoices, array $shopByIdChoices, array $currencyByIdChoicesAttributes, string $defaultCurrencySymbol)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
