<?php

namespace PrestaShopBundle\Entity\B2B;

/**
 * BusinessEntityIdentifier.
 *
 * @ORM\Table(indexes={
 *
 *     @ORM\Index(name="business_entity_identifier_id_business_entity_idx", columns={"id_business_entity"}),
 *     @ORM\Index(name="business_entity_identifier_id_business_identifier_idx", columns={"id_business_identifier"}),
 *     @ORM\Index(name="business_entity_identifier_value_idx", columns={"value"})
 * }, uniqueConstraints={
 *
 *     @ORM\UniqueConstraint(name="uniq_business_entity_identifier", columns={"id_business_entity", "id_business_identifier"})
 * })
 *
 * @ORM\HasLifecycleCallbacks
 *
 * @ORM\Entity()
 */
class BusinessEntityIdentifier
{
    public function getId(): int
    {
    }
    public function getBusinessEntity(): \PrestaShopBundle\Entity\B2B\BusinessEntity
    {
    }
    public function getBusinessIdentifier(): \PrestaShopBundle\Entity\B2B\BusinessIdentifier
    {
    }
    public function getValue(): string
    {
    }
    public function setBusinessEntity(\PrestaShopBundle\Entity\B2B\BusinessEntity $businessEntity): self
    {
    }
    public function setBusinessIdentifier(\PrestaShopBundle\Entity\B2B\BusinessIdentifier $businessIdentifier): self
    {
    }
    public function setValue(string $value): self
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
