<?php

namespace PrestaShop\PrestaShop\Core\Domain\Profile\Permission\QueryResult;

class ConfigurablePermissions
{
    /**
     * @param array $profilePermissionsForTabs
     * @param array $profilePermissionsForModules
     * @param array $profiles
     * @param array $tabs
     * @param array $bulkConfiguration
     * @param string[] $permissions
     * @param int $employeeProfileId
     * @param bool $hasEmployeeEditPermission
     */
    public function __construct(array $profilePermissionsForTabs, array $profilePermissionsForModules, array $profiles, array $tabs, array $bulkConfiguration, array $permissions, int $employeeProfileId, bool $hasEmployeeEditPermission)
    {
    }
    /**
     * @return array
     */
    public function getProfilePermissionsForTabs(): array
    {
    }
    /**
     * @return array
     */
    public function getProfiles(): array
    {
    }
    /**
     * @return array
     */
    public function getTabs(): array
    {
    }
    /**
     * @param int $profileId
     *
     * @return bool
     */
    public function isBulkViewConfigurationEnabled(int $profileId): bool
    {
    }
    /**
     * @param int $profileId
     *
     * @return bool
     */
    public function isBulkAddConfigurationEnabled(int $profileId): bool
    {
    }
    /**
     * @param int $profileId
     *
     * @return bool
     */
    public function isBulkEditConfigurationEnabled(int $profileId): bool
    {
    }
    /**
     * @param int $profileId
     *
     * @return bool
     */
    public function isBulkDeleteConfigurationEnabled(int $profileId): bool
    {
    }
    /**
     * @param int $profileId
     *
     * @return bool
     */
    public function isBulkAllConfigurationEnabled(int $profileId): bool
    {
    }
    /**
     * @return array
     */
    public function getProfilePermissionsForModules(): array
    {
    }
    /**
     * @return array
     */
    public function getPermissions(): array
    {
    }
    /**
     * @return int
     */
    public function getEmployeeProfileId(): int
    {
    }
    /**
     * @return bool
     */
    public function hasEmployeeEditPermission(): bool
    {
    }
}
