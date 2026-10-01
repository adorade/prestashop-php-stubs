<?php

namespace PrestaShop\PrestaShop\Core\Context;

/**
 * This context service gives access to all contextual data related to employee.
 *
 * @experimental Depends on ADR https://github.com/PrestaShop/ADR/pull/36
 */
class EmployeeContext
{
    public const SUPER_ADMIN_PROFILE_ID = 1;
    public function __construct(protected readonly ?\PrestaShop\PrestaShop\Core\Context\Employee $employee, protected readonly array $allShopsIds)
    {
    }
    public function getEmployee(): ?\PrestaShop\PrestaShop\Core\Context\Employee
    {
    }
    public function hasAuthorizationOnShopGroup(int $shopGroupId): bool
    {
    }
    public function hasAuthorizationOnShop(int $shopId): bool
    {
    }
    public function hasAuthorizationForAllShops(): bool
    {
    }
    public function getDefaultShopId(): int
    {
    }
    public function isSuperAdmin(): bool
    {
    }
}
