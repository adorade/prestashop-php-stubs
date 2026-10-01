<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

class FulfillShipmentFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    public function __construct(private \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus, private \Symfony\Component\HttpFoundation\RequestStack $requestStack)
    {
    }
    public function getData($orderId)
    {
    }
    public function getDefaultData()
    {
    }
}
