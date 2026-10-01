<?php

namespace PrestaShopBundle\Entity;

/**
 * ModuleHistory.
 *
 * @ORM\Table
 *
 * @ORM\Entity
 *
 * @ORM\HasLifecycleCallbacks
 */
class ModuleHistory
{
    public function getId(): int
    {
    }
    public function setIdEmployee(int $idEmployee): static
    {
    }
    public function getIdEmployee(): int
    {
    }
    public function setIdModule($idModule): static
    {
    }
    public function getIdModule(): int
    {
    }
    public function setDateAdd(\DateTime $dateAdd): static
    {
    }
    public function getDateAdd(): \DateTime
    {
    }
    public function setDateUpd(\DateTime $dateUpd): static
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
    public function updatedTimestamps(): void
    {
    }
}
