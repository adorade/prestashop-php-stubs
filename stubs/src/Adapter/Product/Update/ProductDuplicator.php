<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Update;

/**
 * Duplicates product
 */
class ProductDuplicator extends \PrestaShop\PrestaShop\Core\Repository\AbstractMultiShopObjectModelRepository
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, protected readonly \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, protected readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, protected readonly \PrestaShop\PrestaShop\Core\Util\String\StringModifierInterface $stringModifier, protected readonly \Doctrine\DBAL\Connection $connection, protected readonly string $dbPrefix, protected readonly \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository, protected readonly \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductSupplierRepository $productSupplierRepository, protected readonly \PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\Repository\SpecificPriceRepository $specificPriceRepository, protected readonly \PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\StockAvailableRepository $stockAvailableRepository, protected readonly \PrestaShop\PrestaShop\Adapter\Product\Stock\Update\ProductStockUpdater $productStockUpdater, protected readonly \PrestaShop\PrestaShop\Adapter\Product\Combination\Update\CombinationStockUpdater $combinationStockUpdater, protected readonly \PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository $productImageRepository, protected readonly \PrestaShop\PrestaShop\Adapter\Product\Image\ProductImagePathFactory $productImageSystemPathFactory, protected readonly \PrestaShop\PrestaShop\Adapter\Tools $tools)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId new product id
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\CannotDuplicateProductException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\CannotUpdateProductException
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function duplicate(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
}
