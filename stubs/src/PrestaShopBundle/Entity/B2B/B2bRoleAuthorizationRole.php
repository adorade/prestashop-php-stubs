<?php

namespace PrestaShopBundle\Entity\B2B;

/**
 * B2bRoleAuthorizationRole.
 *
 * @ORM\Table(
 *     indexes={
 *
 *         @ORM\Index(name="b2b_role_authorization_role_role_idx", columns={"id_role"}),
 *         @ORM\Index(name="b2b_role_authorization_role_auth_role_idx", columns={"id_authorization_role"})
 *     }
 *  )
 *
 * @ORM\Entity()
 */
class B2bRoleAuthorizationRole
{
    public function getRole(): \PrestaShopBundle\Entity\B2B\B2bRole
    {
    }
    public function setRole(\PrestaShopBundle\Entity\B2B\B2bRole $role): self
    {
    }
    public function getAuthorizationRole(): \PrestaShopBundle\Entity\Employee\AuthorizationRole
    {
    }
    public function setAuthorizationRole(\PrestaShopBundle\Entity\Employee\AuthorizationRole $authorizationRole): self
    {
    }
}
