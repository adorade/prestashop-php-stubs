<?php

namespace PrestaShopBundle\Entity\B2B;

/**
 * BusinessEntityAddress.
 *
 * @ORM\Table(
 *     indexes={
 *
 *         @ORM\Index(name="business_entity_address_be_idx", columns={"id_business_entity"}),
 *         @ORM\Index(name="business_entity_address_address_idx", columns={"id_address"})
 *     },
 *     uniqueConstraints={
 *
 *         @ORM\UniqueConstraint(name="uniq_be_address", columns={"id_business_entity", "id_address", "address_type"})
 *     }
 * )
 *
 * @ORM\HasLifecycleCallbacks
 *
 * @ORM\Entity()
 */
class BusinessEntityAddress
{
    public function getId(): ?int
    {
    }
    public function getBusinessEntity(): \PrestaShopBundle\Entity\B2B\BusinessEntity
    {
    }
    public function setBusinessEntity(\PrestaShopBundle\Entity\B2B\BusinessEntity $businessEntity): self
    {
    }
    public function getAddressId(): int
    {
    }
    public function setAddressId(int $idAddress): self
    {
    }
    public function getAddressType(): \PrestaShopBundle\Entity\Enum\AddressTypeEnum
    {
    }
    public function setAddressType(\PrestaShopBundle\Entity\Enum\AddressTypeEnum $addressType): self
    {
    }
    public function isDefault(): bool
    {
    }
    public function setDefault(bool $default): self
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
