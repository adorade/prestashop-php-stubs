<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

/**
 * Class DoctrineGridDataFactory is responsible for returning grid data using Doctrine query builders.
 */
final class DoctrineGridDataFactory implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    /**
     * @param DoctrineQueryBuilderInterface $gridQueryBuilder
     * @param HookDispatcherInterface $hookDispatcher
     * @param QueryParserInterface $queryParser
     * @param string $gridId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Query\DoctrineQueryBuilderInterface $gridQueryBuilder, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \PrestaShop\PrestaShop\Core\Grid\Query\QueryParserInterface $queryParser, $gridId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
