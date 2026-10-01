<?php

namespace PrestaShopBundle\Entity\Employee;

/**
 * @ORM\Entity
 *
 * @ORM\Table
 */
class Profile
{
    public const ADMIN_PROFILE_ID = 1;
    public function __construct(?int $id = null)
    {
    }
    public function getId(): int
    {
    }
    public function isAdmin(): bool
    {
    }
    public function getAuthorizationRoles(): \Doctrine\Common\Collections\Collection
    {
    }
}
