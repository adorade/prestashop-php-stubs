<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

class AttributeFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    public function __construct(private \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus, private readonly \Symfony\Component\Routing\Router $router, private \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext)
    {
    }
    public function getData($id)
    {
    }
    public function getDefaultData()
    {
    }
}
