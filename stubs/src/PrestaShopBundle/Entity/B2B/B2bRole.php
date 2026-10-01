<?php

namespace PrestaShopBundle\Entity\B2B;

/**
 * B2bRole.
 *
 * @ORM\Table(
 *     indexes={@ORM\Index(name="uniq_b2b_role", columns={"role"})}
 * )
 *
 * @ORM\Entity()
 */
class B2bRole
{
    public function __construct()
    {
    }
    public function getIdRole(): int
    {
    }
    public function getRole(): string
    {
    }
    public function setRole(string $role): self
    {
    }
    public function getBusinessEntityCustomerB2bs(): \Doctrine\Common\Collections\Collection
    {
    }
    public function addBusinessEntityCustomerB2b(\PrestaShopBundle\Entity\B2B\BusinessEntityCustomerB2b $businessEntityCustomerB2b): self
    {
    }
    public function removeBusinessEntityCustomerB2b(\PrestaShopBundle\Entity\B2B\BusinessEntityCustomerB2b $businessEntityCustomerB2b): self
    {
    }
    public function getB2bRoleAuthorizationRoles(): \Doctrine\Common\Collections\Collection
    {
    }
    public function addB2bRoleAuthorizationRole(\PrestaShopBundle\Entity\B2B\B2bRoleAuthorizationRole $b2bRoleAuthorizationRole): self
    {
    }
    public function removeB2bRoleAuthorizationRole(\PrestaShopBundle\Entity\B2B\B2bRoleAuthorizationRole $b2bRoleAuthorizationRole): self
    {
    }
}
