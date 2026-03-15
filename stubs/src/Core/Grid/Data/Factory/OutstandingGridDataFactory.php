<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

final class OutstandingGridDataFactory implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    /**
     * @param GridDataFactoryInterface $outstandingDataFactory
     * @param RepositoryInterface $repositoryLocale
     * @param string $contextLocale
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $outstandingDataFactory, \PrestaShop\PrestaShop\Core\Localization\Locale\RepositoryInterface $repositoryLocale, string $contextLocale)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
