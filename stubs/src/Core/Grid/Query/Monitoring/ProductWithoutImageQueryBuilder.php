<?php

namespace PrestaShop\PrestaShop\Core\Grid\Query\Monitoring;

/**
 * Builds query for product without image list data
 */
final class ProductWithoutImageQueryBuilder extends \PrestaShop\PrestaShop\Core\Grid\Query\Monitoring\AbstractProductQueryBuilder
{
    /**
     * {@inheritdoc}
     */
    public function getSearchQueryBuilder(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getCountQueryBuilder(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
