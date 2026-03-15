<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\QueryHandler;

interface GetSpecificPriceListHandlerInterface
{
    /**
     * @param GetSpecificPriceList $query
     *
     * @return SpecificPriceList
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\Query\GetSpecificPriceList $query): \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\QueryResult\SpecificPriceList;
}
