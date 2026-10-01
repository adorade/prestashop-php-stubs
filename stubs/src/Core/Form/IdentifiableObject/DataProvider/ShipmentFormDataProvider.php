<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

abstract class ShipmentFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    public function __construct(private \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus)
    {
    }
    protected function isShipmentShipped(int $orderId, int $shipmentId): bool
    {
    }
}
