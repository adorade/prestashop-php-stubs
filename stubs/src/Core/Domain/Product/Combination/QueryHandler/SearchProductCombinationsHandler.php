<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryHandler;

class SearchProductCombinationsHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryHandler\SearchProductCombinationsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository
     * @param \PrestaShop\PrestaShop\Core\Product\Combination\NameBuilder\CombinationNameBuilderInterface $combinationNameBuilder
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository, \PrestaShop\PrestaShop\Core\Product\Combination\NameBuilder\CombinationNameBuilderInterface $combinationNameBuilder)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Query\SearchProductCombinations $query): \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryResult\ProductCombinationsCollection
    {
    }
}
