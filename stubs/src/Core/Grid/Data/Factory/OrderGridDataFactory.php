<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

/**
 * Decorates DoctrineGridDataFactory configured for orders to modify order records.
 */
final class OrderGridDataFactory implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    /**
     * @param GridDataFactoryInterface $dataFactory
     * @param RepositoryInterface $localeRepository
     * @param ConfigurationInterface $configuration
     * @param string $contextLocale
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $dataFactory, \PrestaShop\PrestaShop\Core\Localization\Locale\RepositoryInterface $localeRepository, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, $contextLocale)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
