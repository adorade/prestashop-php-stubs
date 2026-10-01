<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\Repository;

class CombinationRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractMultiShopObjectModelRepository
{
    use \PrestaShop\PrestaShop\Core\Repository\ShopConstraintTrait;
    /**
     * @param \Doctrine\DBAL\Connection $connection
     * @param string $dbPrefix
     * @param \PrestaShop\PrestaShop\Adapter\Product\Combination\Validate\CombinationValidator $combinationValidator
     * @param \PrestaShop\PrestaShop\Adapter\Attribute\Repository\AttributeRepository $attributeRepository
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix, \PrestaShop\PrestaShop\Adapter\Product\Combination\Validate\CombinationValidator $combinationValidator, \PrestaShop\PrestaShop\Adapter\Attribute\Repository\AttributeRepository $attributeRepository, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId
     *
     * @return \Combination
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): \Combination
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[] $shopIds
     *
     * @return \Combination
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Combination\Exception\CannotAddCombinationException
     */
    public function create(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $shopIds): \Combination
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param int[] $attributeIds
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId
     */
    public function findCombinationIdByAttributes(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $attributeIds): ?\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId
     * @param int[] $attributeIds
     */
    public function saveProductAttributeAssociation(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, array $attributeIds): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
     */
    public function getProductId(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * Creates a new combination in product_attribute_shop assuming it already exists in product_attribute table
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId
     */
    public function addToShop(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): void
    {
    }
    /**
     * Copy combination data from one shop to another.
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $sourceId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $targetId
     */
    public function copyToShop(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $sourceId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $targetId): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     *
     * @return \Combination
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\InvalidShopConstraintException
     */
    public function getByShopConstraint(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): \Combination
    {
    }
    /**
     * @param \Combination $combination
     * @param array $updatableProperties
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     * @param int $errorCode
     */
    public function partialUpdate(\Combination $combination, array $updatableProperties, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint, int $errorCode): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductNotFoundException
     */
    public function getDefaultShopIdForCombination(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId
     * @param int $errorCode
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function delete(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint, int $errorCode = 0): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId[] $combinationIds
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Combination\Exception\CannotBulkDeleteCombinationException
     */
    public function bulkDelete(array $combinationIds, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     */
    public function deleteByProductId(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId[]
     */
    public function getCombinationIds(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): array
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId|null
     */
    public function findFirstCombinationId(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): ?\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId
    {
    }
    /**
     * Check if combination is associated with certain shop
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId
     *
     * @return bool
     */
    public function isAssociatedWithShop(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): bool
    {
    }
    /**
     * Returns default combination ID identified as such in DB by default_on property
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId|null
     */
    public function findDefaultCombinationIdForShop(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): ?\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[]
     *
     * @throws \Doctrine\DBAL\Exception
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopException
     */
    public function getAssociatedShopIds(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId): array
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId $shopGroupId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[]
     */
    public function getAssociatedShopIdsFromGroup(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId $shopGroupId): array
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function assertCombinationExists(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $newDefaultCombinationId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductNotFoundException
     */
    public function setDefaultCombination(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $newDefaultCombinationId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
    public function updateCombinationOutOfStockType(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\OutOfStockType $outOfStockType, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     * @param string $searchPhrase
     *
     * @return array<int, \PrestaShop\PrestaShop\Core\Domain\Product\Combination\CombinationAttributeInformation[]>
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Combination\Exception\CombinationException
     */
    public function searchProductCombinations(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint, string $searchPhrase, ?int $limit = null): array
    {
    }
}
