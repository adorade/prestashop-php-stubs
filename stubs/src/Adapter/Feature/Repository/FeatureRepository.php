<?php

namespace PrestaShop\PrestaShop\Adapter\Feature\Repository;

/**
 * Methods to access data storage for FeatureValue
 */
class FeatureRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @var Connection
     */
    protected $connection;
    /**
     * @var string
     */
    protected $dbPrefix;
    /**
     * @param Connection $connection
     * @param string $dbPrefix
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix)
    {
    }
    /**
     * @param FeatureId $featureId
     *
     * @throws FeatureNotFoundException
     * @throws CoreException
     */
    public function assertExists(\PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureId $featureId): void
    {
    }
    /**
     * @param int $langId
     *
     * @return array<int, array<string, mixed>>
     */
    public function getFeaturesByLang(int $langId): array
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
}
