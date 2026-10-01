<?php

namespace PrestaShopBundle\Entity;

/**
 * @ORM\Table()
 *
 * @ORM\Entity()
 */
class ShipmentProduct
{
    public function getId(): int
    {
    }
    public function getShipment(): ?\PrestaShopBundle\Entity\Shipment
    {
    }
    public function getOrderDetailId(): int
    {
    }
    public function getQuantity(): int
    {
    }
    public function setShipment(?\PrestaShopBundle\Entity\Shipment $shipment): self
    {
    }
    public function setOrderDetailId(int $orderDetailId): self
    {
    }
    public function setQuantity(int $quantity): self
    {
    }
}
