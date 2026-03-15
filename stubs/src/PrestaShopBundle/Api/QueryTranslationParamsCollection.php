<?php

namespace PrestaShopBundle\Api;

class QueryTranslationParamsCollection extends \PrestaShopBundle\Api\QueryParamsCollection
{
    protected $defaultPageIndex = 1;
    protected $defaultPageSize = 20;
    /**
     * @return array
     */
    protected function getValidFilterParams()
    {
    }
    /**
     * @return array
     */
    protected function getValidOrderParams()
    {
    }
    /**
     * @param array $queryParams
     *
     * @return mixed
     */
    protected function setDefaultOrderParam($queryParams)
    {
    }
}
