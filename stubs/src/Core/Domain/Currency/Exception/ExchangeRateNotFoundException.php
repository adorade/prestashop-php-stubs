<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\Exception;

/**
 * Class CannotFindExchangeRateException is thrown if the exchange rate could not be found
 * for the required currency.
 */
class ExchangeRateNotFoundException extends \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyException
{
}
