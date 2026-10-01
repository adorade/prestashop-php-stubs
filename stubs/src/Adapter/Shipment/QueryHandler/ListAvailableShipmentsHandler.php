<?php

namespace PrestaShop\PrestaShop\Adapter\Shipment\QueryHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class ListAvailableShipmentsHandler implements \PrestaShop\PrestaShop\Core\Domain\Shipment\QueryHandler\ListAvailableShipmentsHandlerInterface
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\ShipmentRepository $repository, private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Shipment\Query\ListAvailableShipments $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shipment\QueryResult\ShipmentsForMerge[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Query\ListAvailableShipments $query)
    {
    }
}
