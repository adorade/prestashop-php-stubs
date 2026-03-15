<?php

namespace PrestaShop\PrestaShop\Adapter\Order\CommandHandler;

/**
 * @internal
 */
final class DeleteProductFromOrderHandler extends \PrestaShop\PrestaShop\Adapter\Order\CommandHandler\AbstractOrderCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\Order\Product\CommandHandler\DeleteProductFromOrderHandlerInterface
{
    /**
     * @param ContextStateManager $contextStateManager
     * @param OrderProductQuantityUpdater $orderProductQuantityUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager, \PrestaShop\PrestaShop\Adapter\Order\OrderProductQuantityUpdater $orderProductQuantityUpdater)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Product\Command\DeleteProductFromOrderCommand $command)
    {
    }
}
