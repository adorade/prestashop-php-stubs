<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\QueryHandler;

/**
 * Handles @see GetCombinationForEditing query using legacy object model
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class GetCombinationForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryHandler\GetCombinationForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository
     * @param \PrestaShop\PrestaShop\Core\Product\Combination\NameBuilder\CombinationNameBuilderInterface $combinationNameBuilder
     * @param \PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\StockAvailableRepository $stockAvailableRepository
     * @param \PrestaShop\PrestaShop\Adapter\Attribute\Repository\AttributeRepository $attributeRepository
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository
     * @param \PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository $productImageRepository
     * @param \PrestaShop\PrestaShop\Core\Util\Number\NumberExtractor $numberExtractor
     * @param \PrestaShop\PrestaShop\Adapter\Tax\TaxComputer $taxComputer
     * @param int $contextLanguageId
     * @param \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $configuration
     * @param \PrestaShop\PrestaShop\Adapter\Product\Image\ProductImagePathFactory $productImageUrlFactory
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository, \PrestaShop\PrestaShop\Core\Product\Combination\NameBuilder\CombinationNameBuilderInterface $combinationNameBuilder, \PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\StockAvailableRepository $stockAvailableRepository, \PrestaShop\PrestaShop\Adapter\Attribute\Repository\AttributeRepository $attributeRepository, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository $productImageRepository, \PrestaShop\PrestaShop\Core\Util\Number\NumberExtractor $numberExtractor, \PrestaShop\PrestaShop\Adapter\Tax\TaxComputer $taxComputer, int $contextLanguageId, \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $configuration, \PrestaShop\PrestaShop\Adapter\Product\Image\ProductImagePathFactory $productImageUrlFactory)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Query\GetCombinationForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryResult\CombinationForEditing
    {
    }
}
