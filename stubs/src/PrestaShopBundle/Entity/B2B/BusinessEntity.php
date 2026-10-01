<?php

namespace PrestaShopBundle\Entity\B2B;

/**
 * BusinessEntity.
 *
 * @ORM\Table(
 *     indexes={
 *
 *         @ORM\Index(name="business_entity_shop_idx", columns={"id_shop"}),
 *         @ORM\Index(name="business_entity_customer_group_idx", columns={"id_customer_group"}),
 *         @ORM\Index(name="business_entity_external_ref_idx", columns={"external_ref"}),
 *         @ORM\Index(name="business_entity_deleted_idx", columns={"deleted"})
 *     }
 *  )
 *
 * @ORM\HasLifecycleCallbacks
 *
 * @ORM\Entity()
 */
class BusinessEntity
{
    public function __construct()
    {
    }
    public function getId(): int
    {
    }
    public function getIdShop(): int
    {
    }
    public function setIdShop(int $idShop): self
    {
    }
    public function getIdCustomerGroup(): int
    {
    }
    public function setIdCustomerGroup(int $idCustomerGroup): self
    {
    }
    public function getExternalRef(): ?string
    {
    }
    public function setExternalRef(?string $externalRef): self
    {
    }
    public function getName(): string
    {
    }
    public function setName(string $name): self
    {
    }
    public function getLegalName(): ?string
    {
    }
    public function setLegalName(?string $legalName): self
    {
    }
    public function isDeliveryAuthorized(): bool
    {
    }
    public function setDeliveryAuthorized(bool $deliveryAuthorized): self
    {
    }
    public function getStatus(): \PrestaShopBundle\Entity\Enum\BusinessEntityStatus
    {
    }
    public function setStatus(\PrestaShopBundle\Entity\Enum\BusinessEntityStatus $status): self
    {
    }
    public function isDeleted(): bool
    {
    }
    public function setDeleted(bool $deleted): self
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
     * @return \Doctrine\Common\Collections\Collection<int, BusinessEntityAddress>
     */
    public function getBusinessEntityAddresses(): \Doctrine\Common\Collections\Collection
    {
    }
    public function addBusinessEntityAddress(\PrestaShopBundle\Entity\B2B\BusinessEntityAddress $businessEntityAddress): self
    {
    }
    public function removeBusinessEntityAddress(\PrestaShopBundle\Entity\B2B\BusinessEntityAddress $businessEntityAddress): self
    {
    }
    /**
     * @return \Doctrine\Common\Collections\Collection<int, BusinessEntityIdentifier>
     */
    public function getBusinessEntityIdentifiers(): \Doctrine\Common\Collections\Collection
    {
    }
    public function addBusinessEntityIdentifier(\PrestaShopBundle\Entity\B2B\BusinessEntityIdentifier $businessEntityIdentifier): self
    {
    }
    public function removeBusinessEntityIdentifier(\PrestaShopBundle\Entity\B2B\BusinessEntityIdentifier $businessEntityIdentifier): self
    {
    }
    /**
     * @return \Doctrine\Common\Collections\Collection<int, BusinessEntityCustomerB2b>
     */
    public function getBusinessEntityCustomerB2bs(): \Doctrine\Common\Collections\Collection
    {
    }
    public function addBusinessEntityCustomerB2b(\PrestaShopBundle\Entity\B2B\BusinessEntityCustomerB2b $businessEntityCustomerB2b): self
    {
    }
    public function removeBusinessEntityCustomerB2b(\PrestaShopBundle\Entity\B2B\BusinessEntityCustomerB2b $businessEntityCustomerB2b): self
    {
    }
    /**
     * @ORM\PrePersist
     *
     * @ORM\PreUpdate
     */
    public function updatedTimestamps(): void
    {
    }
}
