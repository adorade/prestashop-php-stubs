<?php

namespace PrestaShop\PrestaShop\Adapter\Order\CommandHandler;

/**
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class DeleteProductFromOrderHandler extends \PrestaShop\PrestaShop\Adapter\Order\CommandHandler\AbstractOrderCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\Order\Product\CommandHandler\DeleteProductFromOrderHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager, \PrestaShop\PrestaShop\Adapter\Order\OrderProductQuantityUpdater $orderProductQuantityUpdater, private \PrestaShop\PrestaShop\Adapter\Shipment\ShipmentShippingCostUpdater $shipmentShippingCostUpdater, private \PrestaShop\PrestaShop\Adapter\Configuration $configuration, private \PrestaShopBundle\Entity\Repository\ShipmentRepository $shipmentRepository, private \PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagStateCheckerInterface $featureFlagStateCheckerInterface)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Product\Command\DeleteProductFromOrderCommand $command)
    {
    }
}
