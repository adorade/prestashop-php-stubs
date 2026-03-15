<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Pack\Repository;

class ProductPackRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @var Connection
     */
    protected $connection;
    /**
     * @var string
     */
    protected $dbPrefix;
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix)
    {
    }
    /**
     * @param PackId $productId
     * @param LanguageId $languageId
     * @param ShopConstraint $shopConstraint
     *
     * @return array<array<string, string>>
     *                                      e.g [
     *                                      ['id_product_item' => '1', 'id_product_attribute_item' => '1', 'name' => 'Product name', 'reference' => 'demo15', 'quantity' => '1'],
     *                                      ['id_product_item' => '2', 'id_product_attribute_item' => '1', 'name' => 'Product name2', 'reference' => 'demo16', 'quantity' => '1'],
     *                                      ]
     *
     * @throws CoreException
     */
    public function getPackedProducts(\PrestaShop\PrestaShop\Core\Domain\Product\Pack\ValueObject\PackId $productId, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): array
    {
    }
    /**
     * @param PackId $packId
     * @param QuantifiedProduct $productForPacking
     *
     * @throws CoreException
     * @throws ProductPackException
     */
    public function addProductToPack(\PrestaShop\PrestaShop\Core\Domain\Product\Pack\ValueObject\PackId $packId, \PrestaShop\PrestaShop\Core\Domain\Product\QuantifiedProduct $productForPacking): void
    {
    }
    /**
     * @param PackId $packId
     *
     * @throws CoreException
     * @throws ProductPackException
     */
    public function removeAllProductsFromPack(\PrestaShop\PrestaShop\Core\Domain\Product\Pack\ValueObject\PackId $packId): void
    {
    }
    /**
     * @param ProductId $productId
     *
     * @return array
     */
    public function getPacksContaining(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): array
    {
    }
    /**
     * @param ProductId $productId
     */
    protected function assertProductExists(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): void
    {
    }
}
