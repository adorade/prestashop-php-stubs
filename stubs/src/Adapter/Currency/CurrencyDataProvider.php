<?php

namespace PrestaShop\PrestaShop\Adapter\Currency;

/**
 * This class will provide data from DB / ORM about Currency.
 */
class CurrencyDataProvider implements \PrestaShop\PrestaShop\Core\Currency\CurrencyDataProviderInterface
{
    /**
     * @param ConfigurationInterface $configuration
     * @param int $shopId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, $shopId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getCurrencies($object = false, $active = true, $group_by = false)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function findAll($currentShopOnly = true)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function findAllInstalled()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getCurrencyByIsoCode($isoCode, $idLang = null)
    {
    }
    /**
     * @param string $isoCode
     * @param string $locale
     *
     * @return Currency|null
     */
    public function getCurrencyByIsoCodeAndLocale($isoCode, $locale)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getCurrencyByIsoCodeOrCreate($isoCode, $idLang = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function saveCurrency(\Currency $currencyEntity)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getCurrencyById($currencyId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDefaultCurrencyIsoCode()
    {
    }
    /**
     * Returns default Currency set in Configuration
     *
     * @return Currency
     */
    public function getDefaultCurrency()
    {
    }
}
