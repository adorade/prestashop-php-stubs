<?php

namespace PrestaShopBundle\Entity\B2B;

/**
 * BusinessIdentifier.
 *
 * @ORM\Table(
 *     indexes={
 *
 *         @ORM\Index(name="business_identifier_zone_idx", columns={"id_zone"})
 *     }
 * )
 *
 * @ORM\HasLifecycleCallbacks
 *
 * @ORM\Entity()
 */
class BusinessIdentifier
{
    public function __construct()
    {
    }
    public function getId(): int
    {
    }
    public function getUnremovable(): bool
    {
    }
    public function setUnremovable(bool $unremovable): self
    {
    }
    public function getIdZone(): ?int
    {
    }
    public function setIdZone(?int $idZone): self
    {
    }
    public function isDeleted(): bool
    {
    }
    public function setDeleted(bool $deleted): self
    {
    }
    public function getBusinessEntityIdentifiers(): \Doctrine\Common\Collections\Collection
    {
    }
    public function addBusinessEntityIdentifier(\PrestaShopBundle\Entity\B2B\BusinessEntityIdentifier $businessEntityIdentifier): self
    {
    }
    public function removeBusinessEntityIdentifier(\PrestaShopBundle\Entity\B2B\BusinessEntityIdentifier $businessEntityIdentifier): self
    {
    }
    public function getLabel(): string
    {
    }
    public function setLabel(string $label): self
    {
    }
    public function getCreatedAt(): \DateTime
    {
    }
    public function setCreatedAt(\DateTime $createdAt): self
    {
    }
    public function getUpdatedAt(): \DateTime
    {
    }
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
    }
    /**
     * @ORM\PrePersist
     *
     * @ORM\PreUpdate
     */
    public function updateTimestamps(): void
    {
    }
}
