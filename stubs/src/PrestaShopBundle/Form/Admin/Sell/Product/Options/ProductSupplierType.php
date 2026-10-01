<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Options;

class ProductSupplierType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param array $locales
     * @param string $defaultCurrencyIsoCode
     * @param \PrestaShop\PrestaShop\Adapter\Currency\Repository\CurrencyRepository $currencyRepository
     * @param \PrestaShopBundle\Form\FormCloner $formCloner
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, string $defaultCurrencyIsoCode, \PrestaShop\PrestaShop\Adapter\Currency\Repository\CurrencyRepository $currencyRepository, \PrestaShopBundle\Form\FormCloner $formCloner)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
