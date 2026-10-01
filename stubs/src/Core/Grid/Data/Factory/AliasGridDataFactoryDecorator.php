<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

/** Class decorates data from alias grid data factory by adding aliases for search terms. */
final class AliasGridDataFactoryDecorator implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    public function __construct(private \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $aliasGridDataFactory, private \PrestaShop\PrestaShop\Adapter\Alias\Repository\AliasRepository $aliasRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria): \PrestaShop\PrestaShop\Core\Grid\Data\GridData
    {
    }
}
