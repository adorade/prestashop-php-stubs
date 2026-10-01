<?php

namespace PrestaShop\PrestaShop\Adapter\Shipment;

class OrderShipmentCreator
{
    public function __construct(\PrestaShopBundle\Entity\Repository\ShipmentRepository $shipmentRepository)
    {
    }
    public function addShipmentOrder(\Order $order, array $productsHandledByCarrier): void
    {
    }
}
