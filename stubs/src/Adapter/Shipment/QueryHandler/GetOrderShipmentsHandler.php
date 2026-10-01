<?php

namespace PrestaShop\PrestaShop\Adapter\Shipment\QueryHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class GetOrderShipmentsHandler implements \PrestaShop\PrestaShop\Core\Domain\Shipment\QueryHandler\GetOrderShipmentsHandlerInterface
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\ShipmentRepository $shipmentRepository, private readonly \PrestaShop\PrestaShop\Adapter\Carrier\Repository\CarrierRepository $carrierRepository, private \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Shipment\Query\GetOrderShipments $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shipment\QueryResult\OrderShipment[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Query\GetOrderShipments $query)
    {
    }
}
