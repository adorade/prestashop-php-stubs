<?php

namespace PrestaShop\PrestaShop\Core\Grid;

/**
 * Class GridFactory is responsible for creating final Grid instance.
 */
final class GridFactory implements \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\GridDefinitionFactoryInterface $definitionFactory
     * @param \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $dataFactory
     * @param \PrestaShop\PrestaShop\Core\Grid\Filter\GridFilterFormFactoryInterface $filterFormFactory
     * @param \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface|null $hookDispatcher
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Definition\Factory\GridDefinitionFactoryInterface $definitionFactory, \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $dataFactory, \PrestaShop\PrestaShop\Core\Grid\Filter\GridFilterFormFactoryInterface $filterFormFactory, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getGrid(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
