<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Update;

/**
 * Duplicates product
 */
class ProductDuplicator extends \PrestaShop\PrestaShop\Core\Repository\AbstractMultiShopObjectModelRepository
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Core\Util\String\StringModifierInterface $stringModifier, \Doctrine\DBAL\Connection $connection, string $dbPrefix, \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductSupplierRepository $productSupplierRepository, \PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\Repository\SpecificPriceRepository $specificPriceRepository, \PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\StockAvailableRepository $stockAvailableRepository, \PrestaShop\PrestaShop\Adapter\Product\Stock\Update\ProductStockUpdater $productStockUpdater, \PrestaShop\PrestaShop\Adapter\Product\Combination\Update\CombinationStockUpdater $combinationStockUpdater, \PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository $productImageRepository, \PrestaShop\PrestaShop\Adapter\Product\Image\ProductImagePathFactory $productImageSystemPathFactory)
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
