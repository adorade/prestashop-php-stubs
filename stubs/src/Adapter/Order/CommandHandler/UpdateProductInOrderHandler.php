<?php

namespace PrestaShop\PrestaShop\Adapter\Order\CommandHandler;

/**
 * @internal
 */
final class UpdateProductInOrderHandler extends \PrestaShop\PrestaShop\Adapter\Order\CommandHandler\AbstractOrderCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\Order\Product\CommandHandler\UpdateProductInOrderHandlerInterface
{
    /**
     * UpdateProductInOrderHandler constructor.
     *
     * @param OrderProductQuantityUpdater $orderProductQuantityUpdater
     * @param OrderDetailUpdater $orderDetailUpdater
     * @param ContextStateManager $contextStateManager
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Order\OrderProductQuantityUpdater $orderProductQuantityUpdater, \PrestaShop\PrestaShop\Adapter\Order\OrderDetailUpdater $orderDetailUpdater, \PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Product\Command\UpdateProductInOrderCommand $command)
    {
    }
}
