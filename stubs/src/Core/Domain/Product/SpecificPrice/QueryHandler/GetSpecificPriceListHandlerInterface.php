<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\QueryHandler;

interface GetSpecificPriceListHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\Query\GetSpecificPriceList $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\QueryResult\SpecificPriceList
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\Query\GetSpecificPriceList $query): \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\QueryResult\SpecificPriceList;
}
