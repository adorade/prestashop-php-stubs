<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\Exception;

/**
 * Is thrown when action associated with currency is done from multi-shop context
 * and that action cannot be done because the currency is set as default in one of shops
 */
class DefaultCurrencyInMultiShopException extends \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyException
{
    /**
     * When trying to remove default currency in multi-shop context
     */
    public const CANNOT_REMOVE_CURRENCY = 1;
    /**
     * When trying to disable default currency in multi-shop context
     */
    public const CANNOT_DISABLE_CURRENCY = 2;
    /**
     * @param string $currencyName
     * @param string $shopName
     * @param string $message
     * @param int $code
     * @param null $previous
     */
    public function __construct($currencyName, $shopName, $message = '', $code = 0, $previous = null)
    {
    }
    /**
     * @return string
     */
    public function getCurrencyName()
    {
    }
    /**
     * @return string
     */
    public function getShopName()
    {
    }
}
