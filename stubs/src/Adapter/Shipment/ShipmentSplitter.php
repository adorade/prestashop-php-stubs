<?php

namespace PrestaShop\PrestaShop\Adapter\Shipment;

class ShipmentSplitter implements \PrestaShop\PrestaShop\Core\Domain\Shipment\Service\ShipmentSplitterInterface
{
    public function __construct(private \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * @param \PrestaShopBundle\Entity\ShipmentProduct[] $productsToMove
     */
    public function split(\PrestaShopBundle\Entity\Shipment $source, int $carrierId, array $productsToMove): \PrestaShopBundle\Entity\Shipment
    {
    }
}
