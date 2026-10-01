<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

class StoreGridDataFactory implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $storeDataFactory)
    {
    }
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria): \PrestaShop\PrestaShop\Core\Grid\Data\GridDataInterface
    {
    }
    /**
     * @param array<int, array<string, mixed>> $stores
     *
     * @return array<int, array<string, mixed>>
     */
    protected function applyModification(array $stores): array
    {
    }
}
