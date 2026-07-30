<?php

namespace PrestaShop\PrestaShop\Adapter\Order\Refund;

class OrderRefundUpdater
{
    /**
     * @param OrderRefundSummary $orderRefundSummary
     * @param bool $returnedProducts
     * @param bool $restock
     *
     * @throws CancelProductFromOrderException
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function updateRefundData(\PrestaShop\PrestaShop\Adapter\Order\Refund\OrderRefundSummary $orderRefundSummary, bool $returnedProducts, bool $restock)
    {
    }
}
