<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\Exception;

/**
 * Exception is thrown on currencies bulk delete failure
 */
class BulkDeleteCurrenciesException extends \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyException
{
    /**
     * @param int[] $currenciesIds
     * @param string $message
     * @param int $code
     * @param Exception $previous
     */
    public function __construct(array $currenciesIds, $message = '', $code = 0, \Exception $previous = null)
    {
    }
    /**
     * @return int[]
     */
    public function getCurrenciesIds(): array
    {
    }
    /**
     * @return string[]
     */
    public function getCurrenciesNames(): array
    {
    }
}
