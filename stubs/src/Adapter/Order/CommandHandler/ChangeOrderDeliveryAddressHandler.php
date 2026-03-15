<?php

namespace PrestaShop\PrestaShop\Adapter\Order\CommandHandler;

/**
 * @internal
 */
final class ChangeOrderDeliveryAddressHandler extends \PrestaShop\PrestaShop\Adapter\Order\CommandHandler\AbstractOrderCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler\ChangeOrderDeliveryAddressHandlerInterface
{
    /**
     * @param OrderAmountUpdater $orderAmountUpdater
     * @param OrderDetailUpdater $orderDetailTaxUpdater
     * @param ContextStateManager $contextStateManager
     * @param OrderProductQuantityUpdater $orderProductQuantityUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Order\OrderAmountUpdater $orderAmountUpdater, \PrestaShop\PrestaShop\Adapter\Order\OrderDetailUpdater $orderDetailTaxUpdater, \PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager, \PrestaShop\PrestaShop\Adapter\Order\OrderProductQuantityUpdater $orderProductQuantityUpdater)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\ChangeOrderDeliveryAddressCommand $command)
    {
    }
}
