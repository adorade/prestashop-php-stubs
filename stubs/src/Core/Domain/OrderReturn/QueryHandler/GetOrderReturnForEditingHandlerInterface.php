<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturn\QueryHandler;

/**
 * Defines contract for GetOrderReturnForEditingHandler
 */
interface GetOrderReturnForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\OrderReturn\Query\GetOrderReturnForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\OrderReturn\QueryResult\OrderReturnForEditing
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderReturn\Query\GetOrderReturnForEditing $query): \PrestaShop\PrestaShop\Core\Domain\OrderReturn\QueryResult\OrderReturnForEditing;
}
