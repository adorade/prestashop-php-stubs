<?php

namespace PrestaShop\PrestaShop\Adapter\Feature\Repository;

/**
 * Methods to access data storage for FeatureValue
 */
class FeatureRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractMultiShopObjectModelRepository
{
    public function __construct(protected readonly \Doctrine\DBAL\Connection $connection, protected readonly string $dbPrefix, protected readonly \PrestaShop\PrestaShop\Adapter\Feature\Validate\FeatureValidator $featureValidator)
    {
    }
    public function get(\PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureId $featureId): \Feature
    {
    }
    /**
     * @param array<int, string> $localizedNames
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[] $associatedShopIds
     *
     * @return \Feature
     */
    public function create(array $localizedNames, array $associatedShopIds): \Feature
    {
    }
    /**
     * @param \Feature $feature
     *
     * @return void
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function update(\Feature $feature): void
    {
    }
    public function delete(\PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureId $featureId): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureId $featureId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Feature\Exception\FeatureNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function assertExists(\PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureId $featureId): void
    {
    }
    /**
     * @param int $langId
     * @param int $shopId
     *
     * @return array<int, array<string, mixed>>
     */
    public function getFeaturesByLang(int $langId, int $shopId): array
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureId $featureId
     * @param \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId
     *
     * @return string
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Feature\Exception\FeatureNotFoundException
     */
    public function getFeatureName(\PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureId $featureId, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId): string
    {
    }
    /**
     * @param int|null $limit
     * @param int|null $offset
     * @param array|null $filters
     *
     * @return array<int, array<string, mixed>>
     */
    public function getFeatures(?int $limit = null, ?int $offset = null, ?array $filters = []): array
    {
    }
    /**
     * @param array|null $filters
     *
     * @return int
     */
    public function getFeaturesCount(?array $filters = []): int
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[]
     */
    public function getShopIdsByConstraint(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): array
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId $shopGroupId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[]
     */
    public function getAssociatedShopIdsFromGroup(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId $shopGroupId): array
    {
    }
    /**
     * Retrieve features with values (id, name).
     *
     * @param int $languageId
     * @param int[] $shopIds
     *
     * @return array<int, array{feature_id: int, name: string, values: array<int, array{item_id: int, name: string}>}>
     */
    public function getFeaturesWithValues(int $languageId, array $shopIds = []): array
    {
    }
}
