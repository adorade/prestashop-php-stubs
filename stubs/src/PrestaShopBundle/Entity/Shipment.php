<?php

namespace PrestaShopBundle\Entity;

/**
 * @ORM\Table()
 *
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\ShipmentRepository"))
 *
 * @ORM\HasLifecycleCallbacks
 */
class Shipment
{
    public function __construct()
    {
    }
    public function getUpdatedAt(): \DateTime
    {
    }
    public function getCreatedAt(): \DateTime
    {
    }
    public function getId(): int
    {
    }
    public function getOrderId(): int
    {
    }
    public function getCarrierId(): int
    {
    }
    public function getAddressId(): int
    {
    }
    public function getShippingCostTaxExcluded(): float
    {
    }
    public function getShippingCostTaxIncluded(): float
    {
    }
    public function getPackedAt(): ?\DateTime
    {
    }
    public function getShippedAt(): ?\DateTime
    {
    }
    public function getDeliveredAt(): ?\DateTime
    {
    }
    public function getCancelledAt(): ?\DateTime
    {
    }
    public function getTrackingNumber(): ?string
    {
    }
    public function getProducts(): \Doctrine\Common\Collections\Collection
    {
    }
    public function setOrderId(int $orderId): self
    {
    }
    public function setCarrierId(int $carrierId): self
    {
    }
    public function setAddressId(int $addressId): self
    {
    }
    public function setShippingCostTaxExcluded(float $shippingCostTaxExcluded): self
    {
    }
    public function setShippingCostTaxIncluded(float $shippingCostTaxIncluded): self
    {
    }
    public function setPackedAt(?\DateTime $packedAt): self
    {
    }
    public function setShippedAt(?\DateTime $shippedAt): self
    {
    }
    public function setDeliveredAt(?\DateTime $deliveredAt): self
    {
    }
    public function setTrackingNumber(?string $trackingNumber): self
    {
    }
    public function setCancelledAt(?\DateTime $cancelledAt): self
    {
    }
    public function addShipmentProduct(\PrestaShopBundle\Entity\ShipmentProduct $shipmentProduct): self
    {
    }
    public function removeProduct(\PrestaShopBundle\Entity\ShipmentProduct $product): self
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
