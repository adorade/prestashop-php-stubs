<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

class TagFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    public function __construct(private \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus)
    {
    }
    public function getData($id)
    {
    }
    public function getDefaultData()
    {
    }
}
