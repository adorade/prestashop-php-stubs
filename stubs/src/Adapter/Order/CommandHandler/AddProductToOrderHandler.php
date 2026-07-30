<?php

namespace PrestaShop\PrestaShop\Adapter\Order\CommandHandler;

/**
 * Handles adding product to an existing order using legacy object model classes.
 *
 * @internal
 */
final class AddProductToOrderHandler extends \PrestaShop\PrestaShop\Adapter\Order\AbstractOrderHandler implements \PrestaShop\PrestaShop\Core\Domain\Order\Product\CommandHandler\AddProductToOrderHandlerInterface
{
    /**
     * @param TranslatorInterface $translator
     * @param ContextStateManager $contextStateManager
     * @param OrderAmountUpdater $orderAmountUpdater
     * @param OrderProductQuantityUpdater $orderProductQuantityUpdater
     * @param OrderDetailUpdater $orderDetailUpdater
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager, \PrestaShop\PrestaShop\Adapter\Order\OrderAmountUpdater $orderAmountUpdater, \PrestaShop\PrestaShop\Adapter\Order\OrderProductQuantityUpdater $orderProductQuantityUpdater, \PrestaShop\PrestaShop\Adapter\Order\OrderDetailUpdater $orderDetailUpdater)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Product\Command\AddProductToOrderCommand $command)
    {
    }
}
