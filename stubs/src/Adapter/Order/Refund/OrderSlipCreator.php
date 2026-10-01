<?php

namespace PrestaShop\PrestaShop\Adapter\Order\Refund;

/**
 * Class OrderSlipCreator is responsible of creating an OrderSlip for a refund
 */
class OrderSlipCreator
{
    /**
     * @param \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * @param \Order $order
     * @param OrderRefundSummary $orderRefundSummary
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Order\Exception\InvalidCancelProductException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Order\Exception\OrderException
     * @throws \PrestaShopDatabaseException
     * @throws \PrestaShopException
     */
    public function create(\Order $order, \PrestaShop\PrestaShop\Adapter\Order\Refund\OrderRefundSummary $orderRefundSummary)
    {
    }
}
