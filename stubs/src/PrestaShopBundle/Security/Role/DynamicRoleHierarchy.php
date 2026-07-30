<?php

namespace PrestaShopBundle\Security\Role;

/**
 * Class DynamicRoleHierarchy is used for Symfony role hierarchy voter to load roles from database.
 */
class DynamicRoleHierarchy implements \Symfony\Component\Security\Core\Role\RoleHierarchyInterface
{
    /**
     * @param array<string> $roles An array of directly assigned roles
     *
     * @return string[] An array of all reachable roles
     */
    public function getReachableRoleNames(array $roles)
    {
    }
}
