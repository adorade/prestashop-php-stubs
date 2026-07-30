<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Repository;

class ProductRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractMultiShopObjectModelRepository
{
    /**
     * @param Connection $connection
     * @param string $dbPrefix
     * @param ProductValidator $productValidator
     * @param TaxRulesGroupRepository $taxRulesGroupRepository
     * @param ManufacturerRepository $manufacturerRepository
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix, \PrestaShop\PrestaShop\Adapter\Product\Validate\ProductValidator $productValidator, \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\Repository\TaxRulesGroupRepository $taxRulesGroupRepository, \PrestaShop\PrestaShop\Adapter\Manufacturer\Repository\ManufacturerRepository $manufacturerRepository, \PrestaShop\PrestaShop\Adapter\Category\Repository\CategoryRepository $categoryRepository)
    {
    }
    /**
     * @param ProductId $productId
     * @param ShopId $shopId
     *
     * @return Product
     *
     * @throws CoreException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): \Product
    {
    }
    /**
     * @param ProductId $productId
     *
     * @return ShopId
     *
     * @throws ProductNotFoundException
     */
    public function getProductDefaultShopId(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId
    {
    }
    /**
     * Returns the default shop of a product among a group, if the product's default shop is in the group it will
     * naturally be returned. In the other case the first shop associated to the product in the group is returned.
     *
     * @param ProductId $productId
     * @param ShopGroupId $shopGroupId
     *
     * @return ShopId
     */
    public function getProductDefaultShopIdForGroup(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId $shopGroupId): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId
    {
    }
    /**
     * @param ProductId $productId
     * @param ShopConstraint $shopConstraint
     *
     * @return Product
     *
     * @throws CoreException
     */
    public function getByShopConstraint(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): \Product
    {
    }
    /**
     * @param array<int, string> $localizedNames
     * @param array<int, string> $localizedLinkRewrites
     * @param string $productType
     * @param ShopId $shopId
     *
     * @return Product
     *
     * @throws CoreException
     */
    public function create(array $localizedNames, array $localizedLinkRewrites, string $productType, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): \Product
    {
    }
    /**
     * @param Product $product
     * @param array $propertiesToUpdate
     * @param ShopConstraint $shopConstraint
     * @param int $errorCode
     */
    public function partialUpdate(\Product $product, array $propertiesToUpdate, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint, int $errorCode): void
    {
    }
    /**
     * @param ProductId $productId
     * @param CarrierReferenceId[] $carrierReferenceIds
     * @param ShopConstraint $shopConstraint
     */
    public function setCarrierReferences(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $carrierReferenceIds, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
    /**
     * @param Product $product
     * @param ShopConstraint $shopConstraint
     * @param int $errorCode
     */
    public function update(\Product $product, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint, int $errorCode): void
    {
    }
    /**
     * @param ProductId $productId
     *
     * @return ShopId[]
     */
    public function getAssociatedShopIds(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): array
    {
    }
    /**
     * @param ProductId $productId
     * @param ShopGroupId $shopGroupId
     *
     * @return ShopId[]
     */
    public function getAssociatedShopIdsFromGroup(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId $shopGroupId): array
    {
    }
    /**
     * @param ProductId $productId
     * @param ShopId[] $shopIds
     *
     * @throws CannotDeleteProductException
     * @throws ShopAssociationNotFound
     */
    public function deleteFromShops(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $shopIds): void
    {
    }
    /**
     * @param ProductId $productId
     * @param ShopConstraint $shopConstraint
     */
    public function deleteByShopConstraint(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
    /**
     * @param ProductId $productId
     *
     * @return bool
     */
    public function hasCombinations(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): bool
    {
    }
    /**
     * @param ProductId $productId
     *
     * @return AttributeGroupId[]
     */
    public function getProductAttributesGroupIds(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): array
    {
    }
    /**
     * @param ProductId $productId
     *
     * @return AttributeId[]
     */
    public function getProductAttributesIds(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): array
    {
    }
    /**
     * Updates the Product's cache default attribute by selecting appropriate value from combination tables
     *
     * @param ProductId $productId
     */
    public function updateCachedDefaultCombination(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
    /**
     * @param ProductId $productId
     *
     * @return ProductType
     *
     * @throws ProductNotFoundException
     */
    public function getProductType(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductType
    {
    }
    /**
     * @param ProductId $productId
     *
     * @return Product
     *
     * @throws ProductNotFoundException
     */
    public function getProductByDefaultShop(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): \Product
    {
    }
    /**
     * @param ProductId $productId
     * @param ShopId $shopId
     *
     * @throws ShopAssociationNotFound
     */
    public function assertProductIsAssociatedToShop(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): void
    {
    }
    /**
     * Gets position product position in category
     *
     * @param ProductId $productId
     * @param CategoryId $categoryId
     *
     * @return int|null
     */
    public function getPositionInCategory(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId $categoryId): ?int
    {
    }
    /**
     * @param ProductId $productId
     * @param LanguageId $languageId
     *
     * @return array<array<string, string>>
     *                                      e.g [
     *                                      ['id_product' => '1', 'name' => 'Product name', 'reference' => 'demo15'],
     *                                      ['id_product' => '2', 'name' => 'Product name2', 'reference' => 'demo16'],
     *                                      ]
     *
     * @throws CoreException
     */
    public function getRelatedProducts(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId): array
    {
    }
    /**
     * @param ProductId $productId
     *
     * @throws ProductNotFoundException
     */
    public function assertProductExists(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): void
    {
    }
    /**
     * @param ProductId[] $productIds
     *
     * @throws ProductNotFoundException
     */
    public function assertAllProductsExists(array $productIds): void
    {
    }
    /**
     * @param string $searchPhrase
     * @param LanguageId $languageId
     * @param ShopId $shopId
     * @param int|null $limit
     *
     * @return array<int, array<string, int|string>>
     */
    public function searchProducts(string $searchPhrase, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId, ?int $limit = null): array
    {
    }
    /**
     * @param string $searchPhrase
     * @param LanguageId $languageId
     * @param ShopId $shopId
     * @param array $filters
     * @param int|null $limit
     *
     * @return array<int, array<string, int|string>>
     *
     * @throws Exception
     * @throws ExceptionAlias
     */
    public function searchCombinations(string $searchPhrase, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId, array $filters = [], ?int $limit = null): array
    {
    }
    public function getProductTaxRulesGroupId(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId
    {
    }
    /**
     * @param string $searchPhrase
     * @param LanguageId $languageId
     * @param ShopId $shopId
     * @param array $filters
     * @param int|null $limit
     *
     * @return QueryBuilder
     */
    protected function getSearchQueryBuilder(string $searchPhrase, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId, array $filters = [], ?int $limit = null): \Doctrine\DBAL\Query\QueryBuilder
    {
    }
    /**
     * Returns a single shop ID when the constraint is a single shop, and the list of shops associated to the product
     * when the constraint is for all shops (shop group constraint is forbidden)
     *
     * @param ProductId $productId
     * @param ShopConstraint $shopConstraint
     *
     * @return ShopId[]
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
