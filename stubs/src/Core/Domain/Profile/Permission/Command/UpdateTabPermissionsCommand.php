<?php

namespace PrestaShop\PrestaShop\Core\Domain\Profile\Permission\Command;

/**
 * Updates tab permissions for employee's profile
 */
class UpdateTabPermissionsCommand
{
    /**
     * @param int $profileId
     * @param int $tabId
     * @param string $permission
     * @param bool $isActive
     */
    public function __construct(int $profileId, int $tabId, string $permission, bool $isActive)
    {
    }
    /**
     * @return ProfileId
     */
    public function getProfileId(): \PrestaShop\PrestaShop\Core\Domain\Profile\ValueObject\ProfileId
    {
    }
    /**
     * @return TabId
     */
    public function getTabId(): \PrestaShop\PrestaShop\Core\Domain\Tab\ValueObject\TabIdInterface
    {
    }
    /**
     * @return PermissionInterface
     */
    public function getPermission(): \PrestaShop\PrestaShop\Core\Domain\Profile\Permission\ValueObject\PermissionInterface
    {
    }
    /**
     * @return bool
     */
    public function isActive(): bool
    {
    }
}
