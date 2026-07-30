<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\QueryHandler;

/**
 * Interface GetReferenceCurrencyHandlerInterface defines contract for GetReferenceCurrencyHandler.
 */
interface GetReferenceCurrencyHandlerInterface
{
    /**
     * @param GetReferenceCurrency $query
     *
     * @return ReferenceCurrency
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Query\GetReferenceCurrency $query): \PrestaShop\PrestaShop\Core\Domain\Currency\QueryResult\ReferenceCurrency;
}
