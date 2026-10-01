<?php

namespace PrestaShopBundle\Entity\B2B;

/**
 * CustomerB2b.
 *
 * @ORM\Table(
 *     indexes={
 *
 *         @ORM\Index(name="customer_b2b_customer_idx", columns={"id_customer"})
 *     },
 *     uniqueConstraints={
 *
 *         @ORM\UniqueConstraint(name="uniq_customer_b2b_customer", columns={"id_customer"})
 *     }
 * )
 *
 * @ORM\HasLifecycleCallbacks
 *
 * @ORM\Entity()
 */
class CustomerB2b
{
    public function __construct()
    {
    }
    public function getId(): ?int
    {
    }
    public function getIdCustomer(): int
    {
    }
    public function setIdCustomer(int $idCustomer): self
    {
    }
    public function getStatus(): \PrestaShopBundle\Entity\Enum\CustomerB2bStatus
    {
    }
    public function setStatus(\PrestaShopBundle\Entity\Enum\CustomerB2bStatus $status): self
    {
    }
    public function getExternalRef(): ?string
    {
    }
    public function setExternalRef(?string $externalRef): self
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
    public function updateTimestamps(): void
    {
    }
}
