<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Pack\Repository;

class ProductPackRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @var \Doctrine\DBAL\Connection
     */
    protected $connection;
    /**
     * @var string
     */
    protected $dbPrefix;
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix, private \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, private \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, private \PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\StockAvailableRepository $stockAvailableRepository)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Pack\ValueObject\PackId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     *
     * @return array<array<string, string>>
     *                                      e.g [
     *                                      ['id_product_item' => '1', 'id_product_attribute_item' => '1', 'name' => 'Product name', 'reference' => 'demo15', 'quantity' => '1'],
     *                                      ['id_product_item' => '2', 'id_product_attribute_item' => '1', 'name' => 'Product name2', 'reference' => 'demo16', 'quantity' => '1'],
     *                                      ]
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function getPackedProducts(\PrestaShop\PrestaShop\Core\Domain\Product\Pack\ValueObject\PackId $productId, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): array
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Pack\ValueObject\PackId $packId
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\QuantifiedProduct $productForPacking
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Pack\Exception\ProductPackException
     */
    public function addProductToPack(\PrestaShop\PrestaShop\Core\Domain\Product\Pack\ValueObject\PackId $packId, \PrestaShop\PrestaShop\Core\Domain\Product\QuantifiedProduct $productForPacking): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Pack\ValueObject\PackId $packId
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Pack\Exception\ProductPackException
     */
    public function removeAllProductsFromPack(\PrestaShop\PrestaShop\Core\Domain\Product\Pack\ValueObject\PackId $packId): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     *
     * @return array
     */
    public function getPacksContaining(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): array
    {
    }
    public function getDynamicPackQuantity(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): ?int
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     */
    protected function assertProductExists(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): void
    {
    }
}
