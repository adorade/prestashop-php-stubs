<?php

namespace PrestaShop\PrestaShop\Core\Search;

/**
 * This class is responsible for managing filters of Listing pages.
 */
class Filters extends \Symfony\Component\HttpFoundation\ParameterBag implements \PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface
{
    public const LIST_LIMIT = 10;
    /** @var string */
    protected $filterId = '';
    /** @var bool */
    protected $needsToBePersisted = true;
    /**
     * @param array $filters
     * @param string $filterId
     */
    public function __construct(array $filters = [], $filterId = '')
    {
    }
    /**
     * @return Filters
     */
    public static function buildDefaults()
    {
    }
    /**
     * {@inheritdoc}
     */
    public static function getDefaults()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getOrderBy()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getOrderWay()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getOffset()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getLimit()
    {
    }
    /**
     * @param array $parameters
     */
    public function addFilter(array $parameters = [])
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
    }
    /**
     * @return string
     */
    public function getFilterId()
    {
    }
    /**
     * @param string $filterId
     *
     * @return $this
     */
    public function setFilterId($filterId)
    {
    }
    /**
     * @return bool
     */
    public function needsToBePersisted(): bool
    {
    }
    /**
     * @param bool $needsToBePersisted
     *
     * @return static
     */
    public function setNeedsToBePersisted(bool $needsToBePersisted): self
    {
    }
}
