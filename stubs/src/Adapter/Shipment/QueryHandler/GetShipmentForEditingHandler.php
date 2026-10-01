<?php

namespace PrestaShop\PrestaShop\Adapter\Shipment\QueryHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class GetShipmentForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\Shipment\QueryHandler\GetShipmentForEditingHandlerInterface
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\ShipmentRepository $shipmentRepository, private \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Shipment\Query\GetShipmentForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shipment\QueryResult\ShipmentForEditing
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Query\GetShipmentForEditing $query)
    {
    }
}
