<?php

namespace PrestaShop\PrestaShop\Adapter\Order\Refund;

/**
 * Class OrderSlipCreator is responsible of creating an OrderSlip for a refund
 */
class OrderSlipCreator
{
    /**
     * @param ConfigurationInterface $configuration
     * @param TranslatorInterface $translator
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * @param Order $order
     * @param OrderRefundSummary $orderRefundSummary
     *
     * @throws InvalidCancelProductException
     * @throws OrderException
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function create(\Order $order, \PrestaShop\PrestaShop\Adapter\Order\Refund\OrderRefundSummary $orderRefundSummary)
    {
    }
}
