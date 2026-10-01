<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\QueryHandler;

/**
 * Interface GetReferenceCurrencyHandlerInterface defines contract for GetReferenceCurrencyHandler.
 */
interface GetReferenceCurrencyHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Currency\Query\GetReferenceCurrency $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Currency\QueryResult\ReferenceCurrency
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Query\GetReferenceCurrency $query): \PrestaShop\PrestaShop\Core\Domain\Currency\QueryResult\ReferenceCurrency;
}
