<?php

namespace PrestaShop\PrestaShop\Adapter\Product\FeatureValue\QueryHandler;

/**
 * Defines contract to handle @var GetProductFeatureValues query
 */
class GetProductFeatureValuesHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\FeatureValue\QueryHandler\GetProductFeatureValuesHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureValueRepository $featureValueRepository)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\FeatureValue\Query\GetProductFeatureValues $query): array
    {
    }
}
