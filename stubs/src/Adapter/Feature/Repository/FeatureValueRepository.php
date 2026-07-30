<?php

namespace PrestaShop\PrestaShop\Adapter\Feature\Repository;

/**
 * Methods to access data storage for FeatureValue
 */
class FeatureValueRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param Connection $connection
     * @param string $dbPrefix
     * @param FeatureValueValidator $featureValueValidator
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix, \PrestaShop\PrestaShop\Adapter\Feature\Validate\FeatureValueValidator $featureValueValidator)
    {
    }
    /**
     * @param FeatureValue $featureValue
     * @param int $errorCode
     *
     * @return FeatureValueId
     *
     * @throws CannotAddFeatureValueException
     * @throws InvalidFeatureValueIdException
     * @throws CoreException
     */
    public function add(\FeatureValue $featureValue, int $errorCode = 0): \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureValueId
    {
    }
    /**
     * @param FeatureValue $featureValue
     *
     * @throws CannotUpdateFeatureValueException
     * @throws CoreException
     */
    public function update(\FeatureValue $featureValue): void
    {
    }
    /**
     * @param FeatureValueId $featureValueId
     *
     * @return FeatureValue
     *
     * @throws FeatureValueNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureValueId $featureValueId): \FeatureValue
    {
    }
    /**
     * @param FeatureValueId $featureValueId
     *
     * @throws FeatureValueNotFoundException
     * @throws CoreException
     */
    public function assertExists(\PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureValueId $featureValueId): void
    {
    }
    /**
     * @param ProductId $productId
     * @param int|null $limit
     * @param int|null $offset
     * @param array|null $filters
     *
     * @return array<int, array<string, mixed>>
     */
    public function getProductFeatureValues(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, ?int $limit = null, ?int $offset = null, ?array $filters = []): array
    {
    }
    public function getAllProductFeatureValues(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): array
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
     * @param ProductId $productId
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
}
