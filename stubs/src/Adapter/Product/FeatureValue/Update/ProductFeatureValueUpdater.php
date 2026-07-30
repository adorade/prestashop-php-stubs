<?php

namespace PrestaShop\PrestaShop\Adapter\Product\FeatureValue\Update;

/**
 * Updates FeatureValue & Product relation
 */
class ProductFeatureValueUpdater
{
    /**
     * @param Connection $connection
     * @param string $dbPrefix
     * @param ProductRepository $productRepository
     * @param FeatureRepository $featureRepository
     * @param FeatureValueRepository $featureValueRepository
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureRepository $featureRepository, \PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureValueRepository $featureValueRepository)
    {
    }
    /**
     * @param ProductId $productId
     * @param ProductFeatureValue[] $productFeatureValues
     *
     * @return FeatureValueId[]
     *
     * @throws CannotAddFeatureValueException
     * @throws CannotUpdateFeatureValueException
     * @throws CoreException
     * @throws DBALException
     * @throws FeatureValueNotFoundException
     * @throws InvalidArgumentException
     * @throws FeatureNotFoundException
     */
    public function setFeatureValues(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $productFeatureValues): array
    {
    }
}
