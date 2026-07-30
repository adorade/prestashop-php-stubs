<?php

namespace PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\QueryHandler;

/**
 * Handles @see GetSpecificPriceList using legacy object model
 */
class GetSpecificPriceListHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\QueryHandler\GetSpecificPriceListHandlerInterface
{
    /**
     * @param SpecificPriceRepository $specificPriceRepository
     * @param AttributeRepository $attributeRepository
     * @param CombinationNameBuilderInterface $combinationNameBuilder
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\Repository\SpecificPriceRepository $specificPriceRepository, \PrestaShop\PrestaShop\Adapter\Attribute\Repository\AttributeRepository $attributeRepository, \PrestaShop\PrestaShop\Core\Product\Combination\NameBuilder\CombinationNameBuilderInterface $combinationNameBuilder)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\Query\GetSpecificPriceList $query): \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\QueryResult\SpecificPriceList
    {
    }
}
