<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\Exception;

/**
 * Class InvalidUnofficialCurrencyException is thrown when an invalid currency
 * is being added (matching an ISO code from CLDR database)
 */
class InvalidUnofficialCurrencyException extends \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyException
{
    /**
     * @param string $message the Exception message to throw
     * @param string $isoCode Invalid currency ISO code
     * @param int $code [optional] The Exception code
     * @param Throwable $previous [optional] The previous throwable used for the exception chaining
     *
     * @since 5.1.0
     */
    public function __construct($message, $isoCode, $code = 0, \Throwable $previous = null)
    {
    }
    /**
     * @return string
     */
    public function getIsoCode(): string
    {
    }
}
