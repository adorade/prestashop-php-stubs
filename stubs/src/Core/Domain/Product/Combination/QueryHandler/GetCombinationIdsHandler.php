<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryHandler;

class GetCombinationIdsHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryHandler\GetCombinationIdsHandlerInterface
{
    /**
     * @param ProductCombinationQueryBuilder $productCombinationQueryBuilder
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Query\ProductCombinationQueryBuilder $productCombinationQueryBuilder)
    {
    }
    /**
     * @param GetCombinationIds $query
     *
     * @return CombinationId[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Query\GetCombinationIds $query): array
    {
    }
}
