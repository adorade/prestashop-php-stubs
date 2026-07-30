<?php

namespace PrestaShopBundle\Entity\Repository;

/**
 * This repository is responsible of management of Administration filters.
 */
class AdminFilterRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @param int $employeeId
     * @param int $shopId
     * @param string $controller
     * @param string $action
     *
     * @return AdminFilter|null
     */
    public function findByEmployeeAndRouteParams($employeeId, $shopId, $controller, $action)
    {
    }
    /**
     * @param int $employeeId
     * @param int $shopId
     * @param string $filterId
     *
     * @return AdminFilter|null
     */
    public function findByEmployeeAndFilterId($employeeId, $shopId, $filterId)
    {
    }
    /**
     * @param int $employeeId
     * @param int $shopId
     * @param string $controller
     * @param string $action
     *
     * @throws ORMInvalidArgumentException
     * @throws OptimisticLockException
     *
     * @return bool Returns false if entity was not found
     */
    public function removeByEmployeeAndRouteParams($employeeId, $shopId, $controller, $action)
    {
    }
    /**
     * Removes filters from ps_admin_filter `filters` column using provided AdminFilter entity.
     *
     * @param AdminFilter $adminFilter
     *
     * @throws OptimisticLockException
     */
    public function unsetFilters(\PrestaShopBundle\Entity\AdminFilter $adminFilter)
    {
    }
    /**
     * Updates and persists modification to a filter (that was previously modified).
     *
     * @param AdminFilter $adminFilter
     */
    public function updateFilter(\PrestaShopBundle\Entity\AdminFilter $adminFilter): void
    {
    }
    /**
     * Persist (create or update) filters into database using employee and uuid
     *
     * @param int $employeeId
     * @param int $shopId
     * @param array $filters
     * @param string $filterId
     *
     * @throws OptimisticLockException
     */
    public function createOrUpdateByEmployeeAndFilterId($employeeId, $shopId, array $filters, $filterId)
    {
    }
    /**
     * Persist (create or update) filters into database using employee and controller name and its action name.
     *
     * @param int $employeeId
     * @param int $shopId
     * @param array $filters
     * @param string $controller
     * @param string $action
     *
     * @throws OptimisticLockException
     */
    public function createOrUpdateByEmployeeAndRouteParams($employeeId, $shopId, $filters, $controller, $action)
    {
    }
}
