<?php

namespace PrestaShop\PrestaShop\Adapter\Shipment;

class ShipmentMerger implements \PrestaShop\PrestaShop\Core\Domain\Shipment\Service\ShipmentMergerInterface
{
    public function __construct(private \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * @param \PrestaShopBundle\Entity\ShipmentProduct[] $productsToMove
     */
    public function merge(\PrestaShopBundle\Entity\Shipment $source, \PrestaShopBundle\Entity\Shipment $target, array $productsToMove): void
    {
    }
}
