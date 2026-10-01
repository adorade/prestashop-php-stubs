<?php

namespace PrestaShop\PrestaShop\Adapter\Shipment\QueryHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class GetShipmentsForOrderDetailHandler implements \PrestaShop\PrestaShop\Core\Domain\Shipment\QueryHandler\GetShipmentsForOrderDetailHandlerInterface
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\ShipmentRepository $repository)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Shipment\QueryResult\ShipmentForOrderDetail[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Query\GetShipmentsForOrderDetail $query)
    {
    }
}
