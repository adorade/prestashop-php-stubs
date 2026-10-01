<?php

namespace PrestaShopBundle\Entity\Employee;

/**
 * @ORM\Entity
 *
 * @ORM\Table(uniqueConstraints={@ORM\UniqueConstraint(name="slug", columns={"slug"})})
 */
class AuthorizationRole
{
    public function getId(): int
    {
    }
    public function getSlug(): string
    {
    }
    public function setSlug(string $slug): static
    {
    }
}
