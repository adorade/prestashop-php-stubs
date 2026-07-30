<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\Repository;

class CombinationRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractMultiShopObjectModelRepository
{
    use \PrestaShop\PrestaShop\Core\Repository\ShopConstraintTrait;
    /**
     * @param Connection $connection
     * @param string $dbPrefix
     * @param CombinationValidator $combinationValidator
     * @param AttributeRepository $attributeRepository
     * @param ProductRepository $productRepository
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix, \PrestaShop\PrestaShop\Adapter\Product\Combination\Validate\CombinationValidator $combinationValidator, \PrestaShop\PrestaShop\Adapter\Attribute\Repository\AttributeRepository $attributeRepository, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository)
    {
    }
    /**
     * @param CombinationId $combinationId
     * @param ShopId $shopId
     *
     * @return Combination
     *
     * @throws CoreException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): \Combination
    {
    }
    /**
     * @param ProductId $productId
     * @param ShopId[] $shopIds
     *
     * @return Combination
     *
     * @throws CannotAddCombinationException
     */
    public function create(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $shopIds): \Combination
    {
    }
    /**
     * @param ProductId $productId
     * @param int[] $attributeIds
     *
     * @return CombinationId
     */
    public function findCombinationIdByAttributes(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $attributeIds): ?\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId
    {
    }
    /**
     * @param CombinationId $combinationId
     * @param int[] $attributeIds
     */
    public function saveProductAttributeAssociation(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, array $attributeIds): void
    {
    }
    /**
     * @param CombinationId $combinationId
     *
     * @return ProductId
     */
    public function getProductId(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * Creates a new combination in product_attribute_shop assuming it already exists in product_attribute table
     *
     * @param CombinationId $combinationId
     * @param ShopId $shopId
     */
    public function addToShop(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): void
    {
    }
    /**
     * Copy combination data from one shop to another.
     *
     * @param CombinationId $combinationId
     * @param ShopId $sourceId
     * @param ShopId $targetId
     */
    public function copyToShop(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $sourceId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $targetId): void
    {
    }
    /**
     * @param CombinationId $combinationId
     * @param ShopConstraint $shopConstraint
     *
     * @return Combination
     *
     * @throws InvalidShopConstraintException
     */
    public function getByShopConstraint(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): \Combination
    {
    }
    /**
     * @param Combination $combination
     * @param array $updatableProperties
     * @param ShopConstraint $shopConstraint
     * @param int $errorCode
     */
    public function partialUpdate(\Combination $combination, array $updatableProperties, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint, int $errorCode): void
    {
    }
    /**
     * @param CombinationId $combinationId
     *
     * @return ShopId
     *
     * @throws ProductNotFoundException
     */
    public function getDefaultShopIdForCombination(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId
    {
    }
    /**
     * @param CombinationId $combinationId
     * @param int $errorCode
     *
     * @throws CoreException
     */
    public function delete(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint, int $errorCode = 0): void
    {
    }
    /**
     * @param CombinationId[] $combinationIds
     * @param ShopConstraint $shopConstraint
     *
     * @throws CannotBulkDeleteCombinationException
     */
    public function bulkDelete(array $combinationIds, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
    /**
     * @param ProductId $productId
     * @param ShopConstraint $shopConstraint
     */
    public function deleteByProductId(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
    /**
     * @param ProductId $productId
     * @param ShopConstraint $shopConstraint
     *
     * @return CombinationId[]
     */
    public function getCombinationIds(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): array
    {
    }
    /**
     * @param ProductId $productId
     * @param ShopConstraint $shopConstraint
     *
     * @return CombinationId|null
     */
    public function findFirstCombinationId(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): ?\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId
    {
    }
    /**
     * Check if combination is associated with certain shop
     *
     * @param CombinationId $combinationId
     * @param ShopId $shopId
     *
     * @return bool
     */
    public function isAssociatedWithShop(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): bool
    {
    }
    /**
     * Returns default combination ID identified as such in DB by default_on property
     *
     * @param ProductId $productId
     * @param ShopId $shopId
     *
     * @return CombinationId|null
     */
    public function findDefaultCombinationIdForShop(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): ?\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId
    {
    }
    /**
     * @param CombinationId $combinationId
     *
     * @return ShopId[]
     *
     * @throws Exception
     * @throws ShopException
     */
    public function getAssociatedShopIds(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId): array
    {
    }
    /**
     * @param CombinationId $combinationId
     * @param ShopGroupId $shopGroupId
     *
     * @return ShopId[]
     */
    public function getAssociatedShopIdsFromGroup(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId $shopGroupId): array
    {
    }
    /**
     * @param CombinationId $combinationId
     *
     * @throws CoreException
     */
    public function assertCombinationExists(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId): void
    {
    }
    /**
     * @param ProductId $productId
     * @param CombinationId $newDefaultCombinationId
     * @param ShopConstraint $shopConstraint
     *
     * @throws ProductNotFoundException
     */
    public function setDefaultCombination(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $newDefaultCombinationId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
    public function updateCombinationOutOfStockType(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\OutOfStockType $outOfStockType, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
    /**
     * @param ProductId $productId
     * @param LanguageId $languageId
     * @param ShopConstraint $shopConstraint
     * @param string $searchPhrase
     *
     * @return array<int, CombinationAttributeInformation[]>
     *
     * @throws CombinationException
     */
    public function searchProductCombinations(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint, string $searchPhrase, ?int $limit = null): array
    {
    }
}
