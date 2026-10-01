<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Options;

class ProductSupplierType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param array $locales
     * @param \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface&\PrestaShop\PrestaShop\Core\Form\FormChoiceAttributeProviderInterface $currencyByIdChoiceProvider
     * @param string $defaultCurrencyIsoCode
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, $currencyByIdChoiceProvider, string $defaultCurrencyIsoCode, \PrestaShop\PrestaShop\Adapter\Currency\Repository\CurrencyRepository $currencyRepository, \PrestaShopBundle\Form\FormCloner $formCloner)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
