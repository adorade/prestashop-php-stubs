<?php

namespace PrestaShopBundle\Entity\B2B;

/**
 * BusinessEntityCustomerB2b.
 *
 * @ORM\Table(
 *     indexes={
 *
 *         @ORM\Index(name="business_entity_customer_b2b_be_idx", columns={"id_business_entity"}),
 *         @ORM\Index(name="business_entity_customer_b2b_customer_idx", columns={"id_customer_b2b"}),
 *         @ORM\Index(name="business_entity_customer_b2b_role_idx", columns={"id_role"})
 *     },
 *     uniqueConstraints={
 *
 *         @ORM\UniqueConstraint(name="uniq_be_customer", columns={"id_business_entity", "id_customer_b2b"})
 *     }
 * )
 *
 * @ORM\HasLifecycleCallbacks
 *
 * @ORM\Entity()
 */
class BusinessEntityCustomerB2b
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
    public function getCustomerB2b(): \PrestaShopBundle\Entity\B2B\CustomerB2b
    {
    }
    public function setCustomerB2b(\PrestaShopBundle\Entity\B2B\CustomerB2b $customerB2b): self
    {
    }
    public function getB2bRole(): \PrestaShopBundle\Entity\B2B\B2bRole
    {
    }
    public function setB2bRole(\PrestaShopBundle\Entity\B2B\B2bRole $b2bRole): self
    {
    }
    public function isDefault(): bool
    {
    }
    public function setIsDefault(bool $isDefault): self
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
