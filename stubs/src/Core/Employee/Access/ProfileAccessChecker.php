<?php

namespace PrestaShop\PrestaShop\Core\Employee\Access;

/**
 * Class ProfileAccessChecker checks profile access for employee.
 */
final class ProfileAccessChecker implements \PrestaShop\PrestaShop\Core\Employee\Access\ProfileAccessCheckerInterface
{
    /**
     * @param EmployeeDataProviderInterface $employeeDataProvider
     * @param int $superAdminProfileId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Employee\EmployeeDataProviderInterface $employeeDataProvider, $superAdminProfileId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function canEmployeeAccessProfile($employeeId, $profileId)
    {
    }
}
