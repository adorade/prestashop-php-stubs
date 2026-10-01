<?php

namespace PrestaShop\PrestaShop\Core\Grid;

/**
 * Class GridFactory is responsible for creating final Grid instance.
 */
class GridFactory implements \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\GridDefinitionFactoryInterface $definitionFactory
     * @param \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $dataFactory
     * @param \PrestaShop\PrestaShop\Core\Grid\Filter\GridFilterFormFactoryInterface $filterFormFactory
     * @param \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher
     */
    public function __construct(protected readonly \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\GridDefinitionFactoryInterface $definitionFactory, protected readonly \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $dataFactory, protected readonly \PrestaShop\PrestaShop\Core\Grid\Filter\GridFilterFormFactoryInterface $filterFormFactory, protected readonly \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getGrid(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria): \PrestaShop\PrestaShop\Core\Grid\GridInterface
    {
    }
}
