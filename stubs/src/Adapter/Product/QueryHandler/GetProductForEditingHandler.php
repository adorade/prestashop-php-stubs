<?php

namespace PrestaShop\PrestaShop\Adapter\Product\QueryHandler;

/**
 * Handles the query @see GetProductForEditing using legacy ObjectModel
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class GetProductForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\QueryHandler\GetProductForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Util\Number\NumberExtractor $numberExtractor
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository
     * @param \PrestaShop\PrestaShop\Adapter\Category\Repository\CategoryRepository $categoryRepository
     * @param \PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\StockAvailableRepository $stockAvailableRepository
     * @param \PrestaShop\PrestaShop\Adapter\Product\VirtualProduct\Repository\VirtualProductFileRepository $virtualProductFileRepository
     * @param \PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository $productImageRepository
     * @param \PrestaShop\PrestaShop\Adapter\Attachment\AttachmentRepository $attachmentRepository
     * @param \PrestaShop\PrestaShop\Adapter\Tax\TaxComputer $taxComputer
     * @param int $countryId
     * @param \PrestaShop\PrestaShop\Adapter\SEO\RedirectTargetProvider $targetProvider
     * @param \PrestaShop\PrestaShop\Adapter\Product\Image\ProductImagePathFactory $productImageUrlFactory
     * @param \PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\Repository\SpecificPriceRepository $specificPriceRepository
     * @param \PrestaShop\PrestaShop\Adapter\Configuration $configuration
     * @param \PrestaShop\PrestaShop\Core\Category\NameBuilder\CategoryDisplayNameBuilder $categoryDisplayNameBuilder
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Util\Number\NumberExtractor $numberExtractor, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Category\Repository\CategoryRepository $categoryRepository, \PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\StockAvailableRepository $stockAvailableRepository, \PrestaShop\PrestaShop\Adapter\Product\VirtualProduct\Repository\VirtualProductFileRepository $virtualProductFileRepository, \PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository $productImageRepository, \PrestaShop\PrestaShop\Adapter\Attachment\AttachmentRepository $attachmentRepository, \PrestaShop\PrestaShop\Adapter\Tax\TaxComputer $taxComputer, int $countryId, \PrestaShop\PrestaShop\Adapter\SEO\RedirectTargetProvider $targetProvider, \PrestaShop\PrestaShop\Adapter\Product\Image\ProductImagePathFactory $productImageUrlFactory, \PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\Repository\SpecificPriceRepository $specificPriceRepository, \PrestaShop\PrestaShop\Adapter\Configuration $configuration, \PrestaShop\PrestaShop\Core\Category\NameBuilder\CategoryDisplayNameBuilder $categoryDisplayNameBuilder, private \PrestaShop\PrestaShop\Adapter\Product\Pack\Repository\ProductPackRepository $packRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Query\GetProductForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductForEditing
    {
    }
}
