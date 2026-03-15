<?php

namespace PrestaShop\PrestaShop\Adapter\Order\CommandHandler;

/**
 * @internal
 */
final class UpdateOrderShippingDetailsHandler extends \PrestaShop\PrestaShop\Adapter\Order\AbstractOrderHandler implements \PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler\UpdateOrderShippingDetailsHandlerInterface
{
    /**
     * @param OrderAmountUpdater $orderAmountUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Order\OrderAmountUpdater $orderAmountUpdater, \PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\UpdateOrderShippingDetailsCommand $command)
    {
    }
}
