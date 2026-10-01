<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\Service;

interface ShipmentSplitterInterface
{
    /**
     * @param \PrestaShopBundle\Entity\ShipmentProduct[] $productsToMove
     */
    public function split(\PrestaShopBundle\Entity\Shipment $source, int $carrierId, array $productsToMove): \PrestaShopBundle\Entity\Shipment;
}
