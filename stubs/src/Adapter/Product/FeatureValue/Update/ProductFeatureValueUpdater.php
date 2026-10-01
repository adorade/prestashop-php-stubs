<?php

namespace PrestaShop\PrestaShop\Adapter\Product\FeatureValue\Update;

/**
 * Updates FeatureValue & Product relation
 */
class ProductFeatureValueUpdater
{
    /**
     * @param \Doctrine\DBAL\Connection $connection
     * @param string $dbPrefix
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository
     * @param \PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureRepository $featureRepository
     * @param \PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureValueRepository $featureValueRepository
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureRepository $featureRepository, \PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureValueRepository $featureValueRepository)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\FeatureValue\ValueObject\ProductFeatureValue[] $productFeatureValues
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureValueId[]
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Feature\Exception\CannotAddFeatureValueException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Feature\Exception\CannotUpdateFeatureValueException
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     * @throws \Doctrine\DBAL\DBALException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Feature\Exception\FeatureValueNotFoundException
     * @throws \Doctrine\DBAL\Exception\InvalidArgumentException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Feature\Exception\FeatureNotFoundException
     */
    public function setFeatureValues(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $productFeatureValues): array
    {
    }
}
