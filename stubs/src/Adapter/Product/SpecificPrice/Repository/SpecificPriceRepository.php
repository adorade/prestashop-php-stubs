<?php

namespace PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\Repository;

/**
 * Methods to access data storage for SpecificPrice
 */
class SpecificPriceRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param Connection $connection
     * @param string $dbPrefix
     * @param SpecificPriceValidator $specificPriceValidator
     * @param ConfigurationInterface $configuration
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix, \PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\Validate\SpecificPriceValidator $specificPriceValidator, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    /**
     * @param SpecificPrice $specificPrice
     * @param int $errorCode
     *
     * @return SpecificPriceId
     *
     * @throws SpecificPriceConstraintException
     * @throws CoreException
     */
    public function add(\SpecificPrice $specificPrice, int $errorCode = 0): \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject\SpecificPriceId
    {
    }
    /**
     * @param SpecificPriceId $specificPriceId
     *
     * @return SpecificPrice
     *
     * @throws SpecificPriceNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject\SpecificPriceId $specificPriceId): \SpecificPrice
    {
    }
    /**
     * @param SpecificPriceId $specificPriceId
     *
     * @return void
     */
    public function delete(\PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject\SpecificPriceId $specificPriceId): void
    {
    }
    /**
     * @param SpecificPrice $specificPrice
     * @param string[] $updatableProperties
     */
    public function partialUpdate(\SpecificPrice $specificPrice, array $updatableProperties): void
    {
    }
    /**
     * @param ProductId $productId
     * @param LanguageId $langId
     * @param int|null $limit
     * @param int|null $offset
     * @param array<string, mixed> $filters
     *
     * @return array<int, array<string, string|null>>
     */
    public function getProductSpecificPrices(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $langId, ?int $limit = null, ?int $offset = null, array $filters = []): array
    {
    }
    /**
     * @param ProductId $productId
     *
     * @return SpecificPriceId[]
     */
    public function getProductSpecificPricesIds(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): array
    {
    }
    /**
     * @param ProductId $productId
     * @param LanguageId $langId
     * @param array<string, mixed> $filters
     *
     * @return int
     */
    public function countProductSpecificPrices(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $langId, array $filters = []): int
    {
    }
    /**
     * Finds id of specific price by properties which defines its uniqueness
     *
     * @param int $productId
     * @param int $combinationId
     * @param int $shopId
     * @param int $groupId
     * @param int $countryId
     * @param int $currencyId
     * @param int $customerId
     * @param int $fromQuantity
     * @param string $durationFrom
     * @param string $durationTo
     *
     * @return SpecificPriceId|null
     *
     * @throws CoreException
     * @throws SpecificPriceConstraintException
     */
    public function findExisting(int $productId, int $combinationId, int $shopId, int $groupId, int $countryId, int $currencyId, int $customerId, int $fromQuantity, string $durationFrom, string $durationTo): ?\PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject\SpecificPriceId
    {
    }
    /**
     * @param ProductId $productId
     *
     * @return PriorityList|null
     */
    public function findPrioritiesForProduct(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): ?\PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject\PriorityList
    {
    }
    /**
     * @return PriorityList
     *
     * @throws CoreException
     */
    public function getDefaultPriorities(): \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject\PriorityList
    {
    }
}
