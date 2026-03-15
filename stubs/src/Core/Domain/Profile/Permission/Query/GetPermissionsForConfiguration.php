<?php

namespace PrestaShop\PrestaShop\Core\Domain\Profile\Permission\Query;

/**
 * Get profile permissons data for configuration
 */
class GetPermissionsForConfiguration
{
    /**
     * @param int $employeeProfileId Profile id of employee who configures permissions
     */
    public function __construct(int $employeeProfileId)
    {
    }
    /**
     * @return ProfileId
     */
    public function getEmployeeProfileId(): \PrestaShop\PrestaShop\Core\Domain\Profile\ValueObject\ProfileId
    {
    }
}
