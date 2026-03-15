<?php

namespace PrestaShopBundle\Security\Admin;

/**
 * Class EmployeeProvider To retrieve Employee entities for the Symfony security components.
 */
class EmployeeProvider implements \Symfony\Component\Security\Core\User\UserProviderInterface
{
    public const ROLE_EMPLOYEE = 'ROLE_EMPLOYEE';
    public function __construct(\PrestaShop\PrestaShop\Adapter\LegacyContext $context, \Psr\Cache\CacheItemPoolInterface $cache)
    {
    }
    /**
     * Fetch the Employee entity that matches the given username.
     * Cache system doesn't supports "@" character, so we rely on a sha1 expression.
     *
     * @param string $username
     *
     * @return Employee
     *
     * @throws UsernameNotFoundException
     */
    public function loadUserByUsername($username)
    {
    }
    /**
     * Reload an Employee and returns a fresh instance.
     *
     * @param UserInterface $employee
     *
     * @return Employee
     */
    public function refreshUser(\Symfony\Component\Security\Core\User\UserInterface $employee)
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
}
