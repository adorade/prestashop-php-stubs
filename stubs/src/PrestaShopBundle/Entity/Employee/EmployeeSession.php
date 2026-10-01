<?php

namespace PrestaShopBundle\Entity\Employee;

/**
 * @ORM\Entity
 *
 * @ORM\Table
 *
 * @ORM\HasLifecycleCallbacks
 */
class EmployeeSession
{
    public function getId(): int
    {
    }
    public function getEmployee(): \PrestaShopBundle\Entity\Employee\Employee
    {
    }
    public function setEmployee(?\PrestaShopBundle\Entity\Employee\Employee $employee): \PrestaShopBundle\Entity\Employee\EmployeeSession
    {
    }
    public function getToken(): string
    {
    }
    public function setToken(string $token): \PrestaShopBundle\Entity\Employee\EmployeeSession
    {
    }
    public function getDateAdd(): \DateTime
    {
    }
    public function getDateUpd(): \DateTime
    {
    }
    /**
     * Now we tell doctrine that before we persist or update we call the updatedTimestamps() function.
     *
     * @ORM\PrePersist
     *
     * @ORM\PreUpdate
     */
    public function updatedTimestamps()
    {
    }
    public function __serialize(): array
    {
    }
    public function __unserialize(array $data): void
    {
    }
}
