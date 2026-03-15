<?php

namespace PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\Update;

/**
 * Responsible for updates related to specific price priorities
 */
class SpecificPricePriorityUpdater
{
    /**
     * @param ConfigurationInterface $configuration
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    /**
     * @param ProductId $productId
     * @param PriorityList $priorityList
     *
     * @throws CoreException
     */
    public function setPrioritiesForProduct(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject\PriorityList $priorityList): void
    {
    }
    /**
     * @param PriorityList $priorityList
     */
    public function updateDefaultPriorities(\PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject\PriorityList $priorityList): void
    {
    }
    /**
     * @param ProductId $productId
     */
    public function removePrioritiesForProduct(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): void
    {
    }
}
