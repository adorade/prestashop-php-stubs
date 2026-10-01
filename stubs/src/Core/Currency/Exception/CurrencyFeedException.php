<?php

namespace PrestaShop\PrestaShop\Core\Currency\Exception;

/**
 * Thrown when an error occurred while fetching a currency exchange rate (network issue, invalid response, ...)
 *
 * @see ExchangeRateProvider
 */
class CurrencyFeedException extends \PrestaShop\PrestaShop\Core\Exception\CoreException
{
}
