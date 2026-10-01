<?php

namespace PrestaShopBundle\Event;

/**
 * Class FilterSearchParametersEvent allows to filter search criteria when it is resolved.
 *
 * You can use getSearchCriteria() to get current search criteria and setSearchCriteria() to update it
 */
class FilterSearchCriteriaEvent extends \Symfony\Contracts\EventDispatcher\Event
{
    /**
     * Name of event.
     */
    public const NAME = 'prestashop.search_criteria.filter';
    /**
     * @param \PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface
     */
    public function getSearchCriteria()
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria
     */
    public function setSearchCriteria(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
