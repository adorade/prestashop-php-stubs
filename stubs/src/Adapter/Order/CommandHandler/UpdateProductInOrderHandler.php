<?php

namespace PrestaShop\PrestaShop\Adapter\Order\CommandHandler;

/**
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class UpdateProductInOrderHandler extends \PrestaShop\PrestaShop\Adapter\Order\CommandHandler\AbstractOrderCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\Order\Product\CommandHandler\UpdateProductInOrderHandlerInterface
{
    public function __construct(private \PrestaShop\PrestaShop\Adapter\Order\OrderProductQuantityUpdater $orderProductQuantityUpdater, private \PrestaShop\PrestaShop\Adapter\Order\OrderDetailUpdater $orderDetailUpdater, private \PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager, private \PrestaShop\PrestaShop\Adapter\Shipment\ShipmentProductQuantityUpdater $shipmentProductQuantityUpdater, private \PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagStateCheckerInterface $featureflagStateCheckerInterface, private \PrestaShop\PrestaShop\Adapter\Shipment\ShipmentShippingCostUpdater $shipmentShippingCostUpdater, private \PrestaShop\PrestaShop\Adapter\Configuration $configuration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Product\Command\UpdateProductInOrderCommand $command)
    {
    }
}
