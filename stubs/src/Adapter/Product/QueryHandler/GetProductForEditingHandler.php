<?php

namespace PrestaShop\PrestaShop\Adapter\Product\QueryHandler;

/**
 * Handles the query @see GetProductForEditing using legacy ObjectModel
 */
class GetProductForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\QueryHandler\GetProductForEditingHandlerInterface
{
    /**
     * @param NumberExtractor $numberExtractor
     * @param ProductRepository $productRepository
     * @param CategoryRepository $categoryRepository
     * @param StockAvailableRepository $stockAvailableRepository
     * @param VirtualProductFileRepository $virtualProductFileRepository
     * @param ProductImageRepository $productImageRepository
     * @param AttachmentRepository $attachmentRepository
     * @param TaxComputer $taxComputer
     * @param int $countryId
     * @param RedirectTargetProvider $targetProvider
     * @param ProductImagePathFactory $productImageUrlFactory
     * @param SpecificPriceRepository $specificPriceRepository
     * @param Configuration $configuration
     * @param CategoryDisplayNameBuilder $categoryDisplayNameBuilder
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Util\Number\NumberExtractor $numberExtractor, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Category\Repository\CategoryRepository $categoryRepository, \PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\StockAvailableRepository $stockAvailableRepository, \PrestaShop\PrestaShop\Adapter\Product\VirtualProduct\Repository\VirtualProductFileRepository $virtualProductFileRepository, \PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository $productImageRepository, \PrestaShop\PrestaShop\Adapter\Attachment\AttachmentRepository $attachmentRepository, \PrestaShop\PrestaShop\Adapter\Tax\TaxComputer $taxComputer, int $countryId, \PrestaShop\PrestaShop\Adapter\Product\Options\RedirectTargetProvider $targetProvider, \PrestaShop\PrestaShop\Adapter\Product\Image\ProductImagePathFactory $productImageUrlFactory, \PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\Repository\SpecificPriceRepository $specificPriceRepository, \PrestaShop\PrestaShop\Adapter\Configuration $configuration, \PrestaShop\PrestaShop\Core\Category\NameBuilder\CategoryDisplayNameBuilder $categoryDisplayNameBuilder)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Query\GetProductForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductForEditing
    {
    }
}
