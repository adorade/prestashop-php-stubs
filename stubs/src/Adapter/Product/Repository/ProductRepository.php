<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Repository;

class ProductRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractMultiShopObjectModelRepository
{
    /**
     * @param \Doctrine\DBAL\Connection $connection
     * @param string $dbPrefix
     * @param \PrestaShop\PrestaShop\Adapter\Product\Validate\ProductValidator $productValidator
     * @param \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\Repository\TaxRulesGroupRepository $taxRulesGroupRepository
     * @param \PrestaShop\PrestaShop\Adapter\Manufacturer\Repository\ManufacturerRepository $manufacturerRepository
     * @param \PrestaShop\PrestaShop\Adapter\Category\Repository\CategoryRepository $categoryRepository
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix, \PrestaShop\PrestaShop\Adapter\Product\Validate\ProductValidator $productValidator, \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\Repository\TaxRulesGroupRepository $taxRulesGroupRepository, \PrestaShop\PrestaShop\Adapter\Manufacturer\Repository\ManufacturerRepository $manufacturerRepository, \PrestaShop\PrestaShop\Adapter\Category\Repository\CategoryRepository $categoryRepository)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId
     *
     * @return \Product
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): \Product
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductNotFoundException
     */
    public function getProductDefaultShopId(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId
    {
    }
    /**
     * Returns the default shop of a product among a group, if the product's default shop is in the group it will
     * naturally be returned. In the other case the first shop associated to the product in the group is returned.
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId $shopGroupId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId
     */
    public function getProductDefaultShopIdForGroup(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId $shopGroupId): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     *
     * @return \Product
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function getByShopConstraint(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): \Product
    {
    }
    /**
     * @param array<int, string> $localizedNames
     * @param array<int, string> $localizedLinkRewrites
     * @param string $productType
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId
     *
     * @return \Product
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function create(array $localizedNames, array $localizedLinkRewrites, string $productType, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): \Product
    {
    }
    /**
     * @param \Product $product
     * @param array $propertiesToUpdate
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     * @param int $errorCode
     */
    public function partialUpdate(\Product $product, array $propertiesToUpdate, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint, int $errorCode): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierReferenceId[] $carrierReferenceIds
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     */
    public function setCarrierReferences(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $carrierReferenceIds, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
    /**
     * @param \Product $product
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     * @param int $errorCode
     */
    public function update(\Product $product, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint, int $errorCode): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[]
     */
    public function getAssociatedShopIds(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): array
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId $shopGroupId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[]
     */
    public function getAssociatedShopIdsFromGroup(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId $shopGroupId): array
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[] $shopIds
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\CannotDeleteProductException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopAssociationNotFound
     */
    public function deleteFromShops(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $shopIds): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     */
    public function deleteByShopConstraint(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     *
     * @return bool
     */
    public function hasCombinations(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): bool
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject\AttributeGroupId[]
     */
    public function getProductAttributesGroupIds(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): array
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\ValueObject\AttributeId[]
     */
    public function getProductAttributesIds(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): array
    {
    }
    /**
     * Updates the Product's cache default attribute by selecting appropriate value from combination tables
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     */
    public function updateCachedDefaultCombination(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductType
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductNotFoundException
     */
    public function getProductType(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductType
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     *
     * @return \Product
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductNotFoundException
     */
    public function getProductByDefaultShop(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): \Product
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopAssociationNotFound
     */
    public function assertProductIsAssociatedToShop(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): void
    {
    }
    /**
     * Gets position product position in category
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId $categoryId
     *
     * @return int|null
     */
    public function getPositionInCategory(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId $categoryId): ?int
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId
     *
     * @return array<array<string, string>>
     *                                      e.g [
     *                                      ['id_product' => '1', 'name' => 'Product name', 'reference' => 'demo15'],
     *                                      ['id_product' => '2', 'name' => 'Product name2', 'reference' => 'demo16'],
     *                                      ]
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function getRelatedProducts(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId): array
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductNotFoundException
     */
    public function assertProductExists(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId[] $productIds
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductNotFoundException
     */
    public function assertAllProductsExists(array $productIds): void
    {
    }
    /**
     * @param string $searchPhrase
     * @param \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId
     * @param int|null $limit
     *
     * @return array<int, array<string, int|string>>
     */
    public function searchProducts(string $searchPhrase, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId, ?int $limit = null): array
    {
    }
    /**
     * @param string $searchPhrase
     * @param \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId
     * @param array $filters
     * @param int|null $limit
     *
     * @return array<int, array<string, int|string>>
     *
     * @throws \Doctrine\DBAL\Driver\Exception
     * @throws \Doctrine\DBAL\Exception
     */
    public function searchCombinations(string $searchPhrase, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId, array $filters = [], ?int $limit = null): array
    {
    }
    public function getProductTaxRulesGroupId(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId
    {
    }
    /**
     * @param string $searchPhrase
     * @param \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId
     * @param array $filters
     * @param int|null $limit
     *
     * @return \Doctrine\DBAL\Query\QueryBuilder
     */
    protected function getSearchQueryBuilder(string $searchPhrase, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId, array $filters = [], ?int $limit = null): \Doctrine\DBAL\Query\QueryBuilder
    {
    }
    /**
     * Returns a single shop ID when the constraint is a single shop, and the list of shops associated to the product
     * when the constraint is for all shops (shop group constraint is forbidden)
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[]
     */
    public function getShopIdsByConstraint(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): array
    {
    }
    /**
     * This override was needed because of the extra parameter in product constructor
     *
     * {@inheritDoc}
     */
    protected function constructObjectModel(int $id, string $objectModelClass, ?int $shopId): \ObjectModel
    {
    }
}
