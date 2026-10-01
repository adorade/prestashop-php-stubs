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
     * @return \PrestaShop\PrestaShop\Core\Domain\Profile\ValueObject\ProfileId
     */
    public function getProfileId(): \PrestaShop\PrestaShop\Core\Domain\Profile\ValueObject\ProfileId
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Tab\ValueObject\TabId
     */
    public function getTabId(): \PrestaShop\PrestaShop\Core\Domain\Tab\ValueObject\TabIdInterface
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Profile\Permission\ValueObject\PermissionInterface
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
