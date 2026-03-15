<?php

namespace PrestaShop\PrestaShop\Adapter\Order\CommandHandler;

/**
 * @internal
 */
final class ChangeOrderInvoiceAddressHandler extends \PrestaShop\PrestaShop\Adapter\Order\AbstractOrderHandler implements \PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler\ChangeOrderInvoiceAddressHandlerInterface
{
    /**
     * @param OrderAmountUpdater $orderAmountUpdater
     * @param OrderDetailUpdater $orderDetailTaxUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Order\OrderAmountUpdater $orderAmountUpdater, \PrestaShop\PrestaShop\Adapter\Order\OrderDetailUpdater $orderDetailTaxUpdater)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\ChangeOrderInvoiceAddressCommand $command)
    {
    }
}
