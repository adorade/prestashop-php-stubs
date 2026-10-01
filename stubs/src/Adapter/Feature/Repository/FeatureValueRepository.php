<?php

namespace PrestaShop\PrestaShop\Adapter\Feature\Repository;

/**
 * Methods to access data storage for FeatureValue
 */
class FeatureValueRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param \Doctrine\DBAL\Connection $connection
     * @param string $dbPrefix
     * @param \PrestaShop\PrestaShop\Adapter\Feature\Validate\FeatureValueValidator $featureValueValidator
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix, \PrestaShop\PrestaShop\Adapter\Feature\Validate\FeatureValueValidator $featureValueValidator)
    {
    }
    /**
     * @param \FeatureValue $featureValue
     * @param int $errorCode
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureValueId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Feature\Exception\CannotAddFeatureValueException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Feature\Exception\InvalidFeatureValueIdException
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function add(\FeatureValue $featureValue, int $errorCode = 0): \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureValueId
    {
    }
    /**
     * @param \FeatureValue $featureValue
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Feature\Exception\CannotUpdateFeatureValueException
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function update(\FeatureValue $featureValue): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureValueId $featureValueId
     *
     * @return \FeatureValue
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Feature\Exception\FeatureValueNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureValueId $featureValueId): \FeatureValue
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureValueId $featureValueId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Feature\Exception\FeatureValueNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function assertExists(\PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureValueId $featureValueId): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param int|null $limit
     * @param int|null $offset
     * @param array|null $filters
     *
     * @return array<int, array<string, mixed>>
     */
    public function getProductFeatureValues(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, ?int $limit = null, ?int $offset = null, ?array $filters = []): array
    {
    }
    public function getAllProductFeatureValues(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): array
    {
    }
    /**
     * @param int $langId
     * @param array $filters
     *
     * @return array
     */
    public function getFeatureValuesByLang(int $langId, array $filters): array
    {
    }
    /**
     * @param int|null $limit
     * @param int|null $offset
     * @param array|null $filters
     *
     * @return array
     */
    public function getFeatureValues(?int $limit = null, ?int $offset = null, ?array $filters = []): array
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param array|null $filters
     *
     * @return int
     */
    public function getProductFeatureValuesCount(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, ?array $filters = []): int
    {
    }
    /**
     * @param array|null $filters
     *
     * @return int
     */
    public function getFeatureValuesCount(?array $filters = []): int
    {
    }
    public function delete(\PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureValueId $featureValueId): void
    {
    }
    /**
     * Get features information by feature value IDs
     *
     * @param int[] $featureValueIds
     * @param int $langId
     *
     * @return array<int, array{id_feature: int, feature_name: string|null, feature_value_name: string|null}>
     */
    public function getFeaturesInfoByFeatureValueIds(array $featureValueIds, int $langId): array
    {
    }
}
