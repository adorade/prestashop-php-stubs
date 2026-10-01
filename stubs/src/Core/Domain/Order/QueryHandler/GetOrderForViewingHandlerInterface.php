<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryHandler;

interface GetOrderForViewingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Order\Query\GetOrderForViewing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderForViewing
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Query\GetOrderForViewing $query): \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderForViewing;
}
