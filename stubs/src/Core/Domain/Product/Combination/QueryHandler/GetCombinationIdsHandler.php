<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryHandler;

class GetCombinationIdsHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryHandler\GetCombinationIdsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Grid\Query\ProductCombinationQueryBuilder $productCombinationQueryBuilder
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Query\ProductCombinationQueryBuilder $productCombinationQueryBuilder)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\Query\GetCombinationIds $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Query\GetCombinationIds $query): array
    {
    }
}
