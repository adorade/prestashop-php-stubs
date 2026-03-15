<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\FeatureValue\QueryHandler;

/**
 * Defines contract to handle @see GetProductFeatureValues
 */
interface GetProductFeatureValuesHandlerInterface
{
    /**
     * @param GetProductFeatureValues $query
     *
     * @return ProductFeatureValue[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\FeatureValue\Query\GetProductFeatureValues $query): array;
}
