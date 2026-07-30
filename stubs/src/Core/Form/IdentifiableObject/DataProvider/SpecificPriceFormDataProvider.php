<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

class SpecificPriceFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    /**
     * @param CommandBusInterface $queryBus
     * @param int $contextShopId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus, int $contextShopId)
    {
    }
    /**
     * @param int $id
     *
     * @return array<string, mixed>
     */
    public function getData($id): array
    {
    }
    /**
     * @return array<string, mixed>
     */
    public function getDefaultData(): array
    {
    }
}
