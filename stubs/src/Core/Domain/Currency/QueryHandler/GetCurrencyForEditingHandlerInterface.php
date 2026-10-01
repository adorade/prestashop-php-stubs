<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\QueryHandler;

/**
 * Interface GetCurrencyForEditingHandlerInterface defines contract for GetCurrencyForFormEditingHandler.
 */
interface GetCurrencyForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Currency\Query\GetCurrencyForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Currency\QueryResult\EditableCurrency
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Query\GetCurrencyForEditing $query);
}
