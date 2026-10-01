<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

class CarrierFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus, private readonly \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext, private readonly \PrestaShop\PrestaShop\Core\Currency\CurrencyDataProviderInterface $currencyDataProvider, private readonly \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, private readonly \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\ZoneByIdChoiceProvider $zonesChoiceProvider, private readonly \PrestaShop\PrestaShop\Adapter\Group\GroupDataProvider $groupDataProvider)
    {
    }
    public function getData($id)
    {
    }
    public function getDefaultData()
    {
    }
}
