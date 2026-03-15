<?php

namespace PrestaShop\PrestaShop\Adapter\Employee;

/**
 * Class EmployeeFormAccessChecker checks employee's access to the employee form.
 */
final class EmployeeFormAccessChecker implements \PrestaShop\PrestaShop\Core\Employee\Access\EmployeeFormAccessCheckerInterface
{
    /**
     * @param ContextEmployeeProviderInterface $contextEmployeeProvider
     * @param EmployeeDataProviderInterface $employeeDataProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Employee\ContextEmployeeProviderInterface $contextEmployeeProvider, \PrestaShop\PrestaShop\Core\Employee\EmployeeDataProviderInterface $employeeDataProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function isRestrictedAccess($employeeId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function canAccessEditFormFor($employeeId)
    {
    }
}
