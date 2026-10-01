<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryHandler;

/**
 * Defines contract for getOrderPreview query handler
 */
interface GetOrderPreviewHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Order\Query\GetOrderPreview $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderPreview
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Query\GetOrderPreview $query): \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderPreview;
}
