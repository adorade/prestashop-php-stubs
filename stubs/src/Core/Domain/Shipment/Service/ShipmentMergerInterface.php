<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\Service;

interface ShipmentMergerInterface
{
    /**
     * @param \PrestaShopBundle\Entity\ShipmentProduct[] $productsToMove
     */
    public function merge(\PrestaShopBundle\Entity\Shipment $source, \PrestaShopBundle\Entity\Shipment $target, array $productsToMove): void;
}
