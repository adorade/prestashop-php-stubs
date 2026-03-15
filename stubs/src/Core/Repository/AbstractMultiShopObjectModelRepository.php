<?php

namespace PrestaShop\PrestaShop\Core\Repository;

/**
 * This abstract class is an extension of the AbstractObjectModelRepository that provides additional helper functions
 * to deal with multi shop entities. It provides additional function which rely on mandatory shop IDs. When you use
 * this class you shouldn't rely on single shop functions anymore, your repository should be oriented as a multi shop
 * one and always require some shop parameters (single shop becomes only an edge case of you generic multi shop
 * behaviour).
 */
class AbstractMultiShopObjectModelRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param int $id
     * @param string $objectModelClass
     * @param string $exceptionClass
     * @param ShopId $shopId
     * @param string $shopAssociationClass
     *
     * @return ObjectModel
     *
     * @throws CoreException
     * @throws ShopAssociationNotFound
     */
    protected function getObjectModelForShop(int $id, string $objectModelClass, string $exceptionClass, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId, string $shopAssociationClass = \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopAssociationNotFound::class): \ObjectModel
    {
    }
    /**
     * @param ObjectModel $objectModel
     * @param ShopId[] $shopIds
     * @param string $exceptionClass
     * @param int $errorCode
     *
     * @return int
     */
    protected function addObjectModelToShops(\ObjectModel $objectModel, array $shopIds, string $exceptionClass, int $errorCode = 0): int
    {
    }
    /**
     * @param ObjectModel $objectModel
     * @param ShopId[] $shopIds
     * @param string $exceptionClass
     * @param int $errorCode
     *
     * @throws CoreException
     */
    protected function updateObjectModelForShops(\ObjectModel $objectModel, array $shopIds, string $exceptionClass, int $errorCode = 0): void
    {
    }
    /**
     * @param ObjectModel $objectModel
     * @param array<int|string, string|int[]> $propertiesToUpdate
     * @param ShopId[] $shopIds
     * @param string $exceptionClass
     * @param int $errorCode
     *
     * @throws CoreException
     */
    protected function partiallyUpdateObjectModelForShops(\ObjectModel $objectModel, array $propertiesToUpdate, array $shopIds, string $exceptionClass, int $errorCode = 0): void
    {
    }
    /**
     * @param int $id
     * @param string $objectModelClassName
     * @param ShopId $shopId
     *
     * @return bool
     */
    protected function hasShopAssociation(int $id, string $objectModelClassName, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): bool
    {
    }
    /**
     * @param int $id
     * @param string $objectModelClassName
     * @param ShopId $shopId
     * @param string $shopAssociationExceptionClass
     *
     * @throws ShopAssociationNotFound
     */
    protected function checkShopAssociation(int $id, string $objectModelClassName, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId, string $shopAssociationExceptionClass = \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopAssociationNotFound::class): void
    {
    }
    /**
     * @param ObjectModel $objectModel
     * @param ShopId[] $shopIds
     * @param string $exceptionClass
     * @param int $errorCode
     *
     * @throws CoreException
     */
    protected function deleteObjectModelFromShops(\ObjectModel $objectModel, array $shopIds, string $exceptionClass, int $errorCode = 0): void
    {
    }
}
