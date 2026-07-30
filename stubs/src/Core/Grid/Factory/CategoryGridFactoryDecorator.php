<?php

namespace PrestaShop\PrestaShop\Core\Grid\Factory;

/**
 * Decorates Category grid factory
 */
final class CategoryGridFactoryDecorator implements \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface
{
    /**
     * @param GridFactoryInterface $categoryGridFactory
     * @param GridFilterFormFactoryInterface $filterFormFactory optional
     *
     * $filterFormFactory is optional in order to comply with SemVer
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $categoryGridFactory, \PrestaShop\PrestaShop\Core\Grid\Filter\GridFilterFormFactoryInterface $filterFormFactory = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getGrid(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
