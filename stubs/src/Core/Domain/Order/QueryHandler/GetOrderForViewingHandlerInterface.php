<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryHandler;

interface GetOrderForViewingHandlerInterface
{
    /**
     * @param GetOrderForViewing $query
     *
     * @return OrderForViewing
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Query\GetOrderForViewing $query): \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderForViewing;
}
