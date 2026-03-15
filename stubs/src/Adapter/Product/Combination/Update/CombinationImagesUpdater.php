<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\Update;

/**
 * Updates images associated to combination
 */
class CombinationImagesUpdater
{
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix)
    {
    }
    /**
     * @param CombinationId $combinationId
     *
     * @throws DBALException
     * @throws InvalidArgumentException
     */
    public function deleteAllImageAssociations(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId): void
    {
    }
    /**
     * @param CombinationId $combinationId
     * @param ImageId[] $imageIds
     *
     * @throws DBALException
     * @throws InvalidArgumentException
     */
    public function associateImages(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, array $imageIds): void
    {
    }
}
