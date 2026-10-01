<?php

namespace PrestaShopBundle\Security\Admin;

/**
 * Class EmployeeProvider To retrieve Employee entities for the Symfony security components.
 */
class EmployeeProvider implements \Symfony\Component\Security\Core\User\UserProviderInterface
{
    /**
     * @deprecated Since v9.0 use Employee::ROLE_EMPLOYEE instead
     */
    public const ROLE_EMPLOYEE = \PrestaShopBundle\Entity\Employee\Employee::ROLE_EMPLOYEE;
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\EmployeeRepository $employeeRepository)
    {
    }
    /**
     * Fetch the Employee entity that matches the given username.
     * Cache system doesn't support "@" character, so we rely on a sha1 expression.
     *
     * @param string $identifier
     *
     * @return \Symfony\Component\Security\Core\User\UserInterface
     *
     * @throws \Symfony\Component\Security\Core\Exception\UserNotFoundException
     */
    public function loadUserByIdentifier(string $identifier): \Symfony\Component\Security\Core\User\UserInterface
    {
    }
    /**
     * Reload an Employee based on the serialized one and returns a fresh instance.
     *
     * @param \Symfony\Component\Security\Core\User\UserInterface $user
     *
     * @return \Symfony\Component\Security\Core\User\UserInterface
     */
    public function refreshUser(\Symfony\Component\Security\Core\User\UserInterface $user)
    {
    }
    /**
     * Tests if the given class supports the security layer. Here, only Employee class is allowed to be used to authenticate.
     *
     * @param string $class
     *
     * @return bool
     */
    public function supportsClass($class)
    {
    }
    protected function loadEmployee(string $email, bool $refresh): \PrestaShopBundle\Entity\Employee\Employee
    {
    }
}
