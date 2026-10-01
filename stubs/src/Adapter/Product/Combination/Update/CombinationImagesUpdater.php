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
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId
     *
     * @throws \Doctrine\DBAL\DBALException
     * @throws \Doctrine\DBAL\Exception\InvalidArgumentException
     */
    public function deleteAllImageAssociations(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId[] $imageIds
     *
     * @throws \Doctrine\DBAL\DBALException
     * @throws \Doctrine\DBAL\Exception\InvalidArgumentException
     */
    public function associateImages(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, array $imageIds): void
    {
    }
}
