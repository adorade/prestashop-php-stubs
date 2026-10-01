<?php

namespace PrestaShop\PrestaShop\Adapter\Order\CommandHandler;

/**
 * Handles adding product to an existing order using legacy object model classes.
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class AddProductToOrderHandler extends \PrestaShop\PrestaShop\Adapter\Order\AbstractOrderHandler implements \PrestaShop\PrestaShop\Core\Domain\Order\Product\CommandHandler\AddProductToOrderHandlerInterface
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager, \PrestaShop\PrestaShop\Adapter\Order\OrderAmountUpdater $orderAmountUpdater, \PrestaShop\PrestaShop\Adapter\Order\OrderProductQuantityUpdater $orderProductQuantityUpdater, \PrestaShop\PrestaShop\Adapter\Order\OrderDetailUpdater $orderDetailUpdater, private \PrestaShop\PrestaShop\Adapter\Order\Repository\OrderDetailRepository $orderDetailRepository, private \PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagStateCheckerInterface $featureFlagStateCheckerInterface, private \PrestaShop\PrestaShop\Adapter\Shipment\ShipmentProductAssigner $shipmentProductAssigner)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Product\Command\AddProductToOrderCommand $command)
    {
    }
}
