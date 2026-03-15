<?php

namespace PrestaShop\PrestaShop\Adapter\Order\CommandHandler;

/**
 * @internal
 */
final class DeleteCartRuleFromOrderHandler extends \PrestaShop\PrestaShop\Adapter\Order\AbstractOrderHandler implements \PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler\DeleteCartRuleFromOrderHandlerInterface
{
    /**
     * @param OrderAmountUpdater $orderAmountUpdater
     * @param ContextStateManager $contextStateManager
     * @param OrderProductQuantityUpdater $orderProductQuantityUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Order\OrderAmountUpdater $orderAmountUpdater, \PrestaShop\PrestaShop\Adapter\Order\OrderProductQuantityUpdater $orderProductQuantityUpdater, \PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\DeleteCartRuleFromOrderCommand $command)
    {
    }
}
