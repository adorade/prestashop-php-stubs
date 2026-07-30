<?php

namespace PrestaShopBundle\Api;

abstract class QueryParamsCollection
{
    public const SQL_PARAM_FIRST_RESULT = 'first_result';
    public const SQL_PARAM_MAX_RESULTS = 'max_results';
    public const SQL_CLAUSE_WHERE = 'where';
    public const SQL_CLAUSE_HAVING = 'having';
    /**
     * @var array
     */
    protected $queryParams = [];
    protected $defaultPageIndex = 1;
    protected $defaultPageSize = 100;
    /**
     * @return array
     */
    public function getQueryParams()
    {
    }
    /**
     * @return int
     */
    public function getDefaultPageIndex()
    {
    }
    /**
     * @return int
     */
    public function getDefaultPageSize()
    {
    }
    /**
     * @param int $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
    }
    /**
     * @param int $pageIndex
     *
     * @return $this
     */
    public function setPageIndex($pageIndex)
    {
    }
    /**
     * @param Request $request
     *
     * @return $this
     */
    public function fromRequest(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @param array $queryParams
     * @param array $allParams
     *
     * @return $this
     */
    public function fromArray(array $queryParams, array $allParams = []): \PrestaShopBundle\Api\QueryParamsCollection
    {
    }
    /**
     * @param array $queryParams
     *
     * @return mixed
     */
    protected function excludeUnknownParams(array $queryParams)
    {
    }
    /**
     * @param array $queryParams
     * @param Request $request
     *
     * @return array
     */
    protected function parseFilterParams(array $queryParams, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @param array $queryParams
     * @param array<array|string|int> $allParameters
     *
     * @return array
     */
    protected function parseFilterParamsArray(array $queryParams, array $allParameters): array
    {
    }
    /**
     * @return array
     */
    abstract protected function getValidFilterParams();
    /**
     * @param array $queryParams
     *
     * @return array
     */
    protected function parsePaginationParams(array $queryParams)
    {
    }
    /**
     * @return array
     */
    protected function getValidPaginationParams()
    {
    }
    /**
     * @param array $queryParams
     *
     * @return array|mixed
     */
    protected function parseOrderParams(array $queryParams)
    {
    }
    /**
     * @return array
     */
    abstract protected function getValidOrderParams();
    /**
     * @param array $queryParams
     *
     * @return mixed
     */
    abstract protected function setDefaultOrderParam($queryParams);
    /**
     * @param string $subject
     *
     * @return mixed
     */
    protected function removeDirection($subject)
    {
    }
    /**
     * @return string
     */
    public function getSqlOrder()
    {
    }
    /**
     * @return array
     */
    public function getSqlFilters()
    {
    }
    /**
     * @return bool
     */
    protected function hasSearchFilter()
    {
    }
    /**
     * @param int|array<int> $value
     * @param string $column
     * @param array $filters
     *
     * @return array
     */
    protected function appendSqlFilter($value, $column, array $filters)
    {
    }
    /**
     * @return array
     */
    public function getSqlParams()
    {
    }
    /**
     * @return array
     */
    public function getSqlPaginationParams()
    {
    }
    /**
     * @param string $column
     * @param array|int|string $value
     * @param int|array<int> $sqlParams
     *
     * @return mixed
     */
    protected function appendSqlFilterParams($column, $value, $sqlParams)
    {
    }
    /**
     * @param array $filters
     *
     * @return array
     */
    protected function appendSqlCategoryFilter(array $filters)
    {
    }
    /**
     * @param int|array<int> $value
     * @param array $sqlParams
     *
     * @return mixed
     */
    protected function appendSqlCategoryFilterParam($value, $sqlParams)
    {
    }
    /**
     * @param array $filters
     * @param int|array<int> $dateAdd
     *
     * @return array
     */
    protected function appendSqlDateAddFilter(array $filters, $dateAdd)
    {
    }
    /**
     * @param int|array<int> $value
     * @param array $sqlParams
     *
     * @return mixed
     */
    protected function appendSqlDateAddFilterParam($value, $sqlParams)
    {
    }
    /**
     * @param array $filters
     * @param string|int $active
     *
     * @return array
     */
    protected function appendSqlActiveFilter(array $filters, $active)
    {
    }
    /**
     * @param int|string $value
     * @param array $sqlParams
     *
     * @return mixed
     */
    protected function appendSqlActiveFilterParam($value, $sqlParams)
    {
    }
    /**
     * @param array $filters
     * @param int|array<int> $attributes
     *
     * @return array
     */
    protected function appendSqlAttributesFilter(array $filters, $attributes)
    {
    }
    /**
     * @param string|array<string> $value
     * @param array $sqlParams
     *
     * @return array
     */
    protected function appendSqlAttributesFilterParam($value, $sqlParams)
    {
    }
    /**
     * @param array $filters
     * @param int|array<int>$attributes
     *
     * @return array
     */
    protected function appendSqlFeaturesFilter(array $filters, $attributes)
    {
    }
    /**
     * @param string|array<string> $value
     * @param array $sqlParams
     *
     * @return array
     */
    protected function appendSqlFeaturesFilterParam($value, $sqlParams)
    {
    }
    /**
     * @param array$filters
     *
     * @return mixed
     */
    protected function appendSqlSearchFilter($filters)
    {
    }
    protected function appendSqlSearchFilterParam($value, $sqlParams)
    {
    }
    protected function isTimestamp($timestamp)
    {
    }
}
