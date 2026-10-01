<?php

namespace PrestaShop\PrestaShop\Adapter\Order\CommandHandler;

/**
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class ChangeOrderInvoiceAddressHandler extends \PrestaShop\PrestaShop\Adapter\Order\AbstractOrderHandler implements \PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler\ChangeOrderInvoiceAddressHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Order\OrderAmountUpdater $orderAmountUpdater
     * @param \PrestaShop\PrestaShop\Adapter\Order\OrderDetailUpdater $orderDetailTaxUpdater
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
