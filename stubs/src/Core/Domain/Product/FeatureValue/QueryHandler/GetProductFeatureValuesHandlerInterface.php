<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\FeatureValue\QueryHandler;

/**
 * Defines contract to handle @see GetProductFeatureValues
 */
interface GetProductFeatureValuesHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\FeatureValue\Query\GetProductFeatureValues $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\FeatureValue\QueryResult\ProductFeatureValue[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\FeatureValue\Query\GetProductFeatureValues $query): array;
}
