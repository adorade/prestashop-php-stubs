<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

/**
 * Class DoctrineGridDataFactory is responsible for returning grid data using Doctrine query builders.
 */
class DoctrineGridDataFactory implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineQueryBuilderInterface $gridQueryBuilder
     * @param \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher
     * @param \PrestaShop\PrestaShop\Core\Grid\Query\QueryParserInterface $queryParser
     * @param string $gridId
     * @param \PrestaShop\PrestaShop\Core\ExtraProperty\Grid\ExtraPropertiesGridQueryBuilderModifier|null $extraPropertiesGridQueryBuilderModifier
     */
    public function __construct(protected \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineQueryBuilderInterface $gridQueryBuilder, protected \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, protected \PrestaShop\PrestaShop\Core\Grid\Query\QueryParserInterface $queryParser, protected string $gridId, protected ?\PrestaShop\PrestaShop\Core\ExtraProperty\Grid\ExtraPropertiesGridQueryBuilderModifier $extraPropertiesGridQueryBuilderModifier = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
    protected function formatSQL(string $query): string
    {
    }
}
