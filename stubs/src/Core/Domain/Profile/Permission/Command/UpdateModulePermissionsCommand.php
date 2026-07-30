<?php

namespace PrestaShop\PrestaShop\Core\Domain\Profile\Permission\Command;

/**
 * Updates module permissions for employee's profile
 */
class UpdateModulePermissionsCommand
{
    /**
     * @param int $profileId
     * @param int $moduleId
     * @param string $permission
     * @param bool $isActive
     */
    public function __construct(int $profileId, int $moduleId, string $permission, bool $isActive)
    {
    }
    /**
     * @return ProfileId
     */
    public function getProfileId(): \PrestaShop\PrestaShop\Core\Domain\Profile\ValueObject\ProfileId
    {
    }
    /**
     * @return ModuleId
     */
    public function getModuleId(): \PrestaShop\PrestaShop\Core\Domain\Module\ValueObject\ModuleId
    {
    }
    /**
     * @return ModulePermission
     */
    public function getPermission(): \PrestaShop\PrestaShop\Core\Domain\Profile\Permission\ValueObject\ModulePermission
    {
    }
    /**
     * @return bool
     */
    public function isActive(): bool
    {
    }
}
