<?php

namespace PrestaShopBundle\Entity\Repository;

/**
 * Class ModuleRepository is responsible for retrieving module data from database.
 */
class ModuleRepository
{
    /**
     * @param Connection $connection
     * @param string $databasePrefix
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, $databasePrefix)
    {
    }
    /**
     * Find enabled countries for module in shop.
     *
     * @param int $moduleId
     * @param int $shopId
     *
     * @return int[] Array of country IDs
     */
    public function findRestrictedCountryIds($moduleId, $shopId)
    {
    }
    /**
     * Find enabled currencies for module in shop.
     *
     * @param int $moduleId
     * @param int $shopId
     *
     * @return int[] Array of currency IDs
     */
    public function findRestrictedCurrencyIds($moduleId, $shopId)
    {
    }
    /**
     * Find enabled groups for module in shop.
     *
     * @param int $moduleId
     * @param int $shopId
     *
     * @return int[] Array of group IDs
     */
    public function findRestrictedGroupIds($moduleId, $shopId)
    {
    }
    /**
     * Find enabled carriers for module in shop.
     *
     * @param int $moduleId
     * @param int $shopId
     *
     * @return int[] Array of carrier references
     */
    public function findRestrictedCarrierReferenceIds($moduleId, $shopId)
    {
    }
}
