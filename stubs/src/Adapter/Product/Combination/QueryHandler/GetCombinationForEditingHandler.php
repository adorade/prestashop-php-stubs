<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\QueryHandler;

/**
 * Handles @see GetCombinationForEditing query using legacy object model
 */
class GetCombinationForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryHandler\GetCombinationForEditingHandlerInterface
{
    /**
     * @param CombinationRepository $combinationRepository
     * @param CombinationNameBuilderInterface $combinationNameBuilder
     * @param StockAvailableRepository $stockAvailableRepository
     * @param AttributeRepository $attributeRepository
     * @param ProductRepository $productRepository
     * @param ProductImageRepository $productImageRepository
     * @param NumberExtractor $numberExtractor
     * @param TaxComputer $taxComputer
     * @param int $contextLanguageId
     * @param ShopConfigurationInterface $configuration
     * @param ProductImagePathFactory $productImageUrlFactory
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
