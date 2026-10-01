<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturn\QueryHandler;

/**
 * Returns the list of returned product rows for the merchandise return edit page.
 */
interface GetOrderReturnProductsHandlerInterface
{
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\OrderReturn\QueryResult\OrderReturnProductForEditing[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderReturn\Query\GetOrderReturnProducts $query): array;
}
