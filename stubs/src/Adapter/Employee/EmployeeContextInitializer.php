<?php

namespace PrestaShop\PrestaShop\Adapter\Employee;

/**
 * Loads an existing super-administrator into the legacy context.
 *
 * Used by CLI entry points that need to satisfy the ProfileAccessChecker
 * before dispatching CQRS employee commands (the checker requires the
 * context employee to be a super-admin in order to act on super-admin
 * profiles).
 */
class EmployeeContextInitializer
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    /**
     * @return int|null The impersonated employee ID, or null if no super-admin exists
     */
    public function initializeWithFirstSuperAdmin(): ?int
    {
    }
}
