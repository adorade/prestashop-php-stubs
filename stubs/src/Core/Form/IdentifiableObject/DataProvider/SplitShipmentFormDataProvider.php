<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

class SplitShipmentFormDataProvider extends \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\ShipmentFormDataProvider
{
    public function __construct(private \PrestaShop\PrestaShop\Adapter\Order\Repository\OrderDetailRepository $orderDetailRepository, private \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus, private \Symfony\Component\HttpFoundation\RequestStack $requestStack)
    {
    }
    public function getData($orderId)
    {
    }
    public function getDefaultData()
    {
    }
}
