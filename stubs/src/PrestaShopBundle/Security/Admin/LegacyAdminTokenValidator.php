<?php

namespace PrestaShopBundle\Security\Admin;

/**
 * This service is used to validate the query token in legacy context, especially for Frontend.
 * It's called legacy because it's used in legacy context, but it can validate both Symfony and legacy tokens.
 * As such it's a common service for front and admin which is why some of its dependencies are built manually
 * and why we partially rely on legacy classes and tools.
 */
class LegacyAdminTokenValidator
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Employee\EmployeeRepository $employeeRepository, private readonly \Symfony\Component\HttpFoundation\RequestStack $requestStack)
    {
    }
    public function isTokenValid(?int $employeeId = null, ?string $adminToken = null): bool
    {
    }
}
