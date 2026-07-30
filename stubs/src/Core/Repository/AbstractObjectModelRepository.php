<?php

namespace PrestaShop\PrestaShop\Core\Repository;

/**
 * This abstract class provides the base helper function to build a repository service based on the use of legacy
 * objects from PrestaShop. You need to implement the required methods (get, add, update, ...) into your repository,
 * but you can use this abstract class to do most of the job.
 */
abstract class AbstractObjectModelRepository
{
    /**
     * @param int $id
     * @param string $objectTableName
     * @param string $exceptionClass
     * @param int $errorCode
     *
     * @throws CoreException
     */
    protected function assertObjectModelExists(int $id, string $objectTableName, string $exceptionClass, int $errorCode = 0): void
    {
    }
    /**
     * @param int $id
     * @param string $objectModelClass
     * @param string $exceptionClass
     *
     * @return ObjectModel
     *
     * @throws CoreException
     */
    protected function getObjectModel(int $id, string $objectModelClass, string $exceptionClass): \ObjectModel
    {
    }
    /**
     * @param ObjectModel $objectModel
     * @param string $exceptionClass
     * @param int $errorCode
     *
     * @return int
     */
    protected function addObjectModel(\ObjectModel $objectModel, string $exceptionClass, int $errorCode = 0): int
    {
    }
    /**
     * @param ObjectModel $objectModel
     * @param string $exceptionClass
     * @param int $errorCode
     *
     * @throws CoreException
     */
    protected function updateObjectModel(\ObjectModel $objectModel, string $exceptionClass, int $errorCode = 0): void
    {
    }
    /**
     * @param ObjectModel $objectModel
     * @param array $propertiesToUpdate
     * @param string $exceptionClass
     * @param int $errorCode
     *
     * @throws CoreException
     */
    protected function partiallyUpdateObjectModel(\ObjectModel $objectModel, array $propertiesToUpdate, string $exceptionClass, int $errorCode = 0): void
    {
    }
    /**
     * @param ObjectModel $objectModel
     * @param string $exceptionClass
     * @param int $errorCode
     *
     * @throws CoreException
     */
    protected function deleteObjectModel(\ObjectModel $objectModel, string $exceptionClass, int $errorCode = 0): void
    {
    }
    /**
     * @param ObjectModel $objectModel
     * @param string $exceptionClass
     * @param int $errorCode
     *
     * @throws CoreException
     */
    protected function softDeleteObjectModel(\ObjectModel $objectModel, string $exceptionClass, int $errorCode = 0): void
    {
    }
    /**
     * Expected format: $propertiesToUpdate = [
     *     'active', // Regular field are simply listed
     *     'price',
     *     'name' => [ // Multilang fields must indicate which language is impacted
     *         1,
     *         3,
     *     ],
     * ];
     *
     * @param array $propertiesToUpdate
     *
     * @return array<string, mixed>
     */
    protected function formatPropertiesToUpdate(array $propertiesToUpdate): array
    {
    }
    /**
     * @param int $id
     * @param string $objectModelClass
     * @param string $exceptionClass
     * @param int|null $shopId
     *
     * @return ObjectModel
     *
     * @throws CoreException
     */
    protected function fetchObjectModel(int $id, string $objectModelClass, string $exceptionClass, ?int $shopId): \ObjectModel
    {
    }
    /**
     * This method can be overridden in case your ObjectModel has a special constructor
     *
     * @param int $id
     * @param string $objectModelClass
     * @param int|null $shopId
     *
     * @return ObjectModel
     */
    protected function constructObjectModel(int $id, string $objectModelClass, ?int $shopId): \ObjectModel
    {
    }
}
