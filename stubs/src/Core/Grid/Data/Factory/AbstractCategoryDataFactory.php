<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

/**
 * Class AbstractCategoryDataFactory decorates DoctrineGridDataFactory configured for categories to modify category records.
 */
abstract class AbstractCategoryDataFactory implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    public const DESCRIPTION_MAX_LENGTH = 150;
    /**
     * @var GridDataFactoryInterface
     */
    protected $doctrineCategoryDataFactory;
    /**
     * @param GridDataFactoryInterface $doctrineCategoryDataFactory
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $doctrineCategoryDataFactory)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
    /**
     * Modify category records.
     */
    protected function modifyRecords(array $records): array
    {
    }
}
