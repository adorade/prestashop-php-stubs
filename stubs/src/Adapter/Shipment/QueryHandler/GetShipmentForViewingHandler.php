<?php

namespace PrestaShop\PrestaShop\Adapter\Shipment\QueryHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class GetShipmentForViewingHandler implements \PrestaShop\PrestaShop\Core\Domain\Shipment\QueryHandler\GetShipmentForViewingHandlerInterface
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\ShipmentRepository $shipmentRepository, private readonly \PrestaShop\PrestaShop\Adapter\Order\Repository\OrderRepository $orderRepository, private readonly \PrestaShop\PrestaShop\Adapter\Carrier\Repository\CarrierRepository $carrierRepository, private readonly \PrestaShop\PrestaShop\Adapter\Country\Repository\CountryRepository $countryRepository, private readonly \PrestaShop\PrestaShop\Adapter\Address\Repository\AddressRepository $addressRepository, private readonly \PrestaShop\PrestaShop\Adapter\State\Repository\StateRepository $stateRepository, private \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Shipment\Query\GetShipmentForViewing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shipment\QueryResult\ShipmentForViewing
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Query\GetShipmentForViewing $query)
    {
    }
}
