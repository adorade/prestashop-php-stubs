<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\QueryResult;

class ShipmentsForMerge
{
    public function __construct(private int $id, private string $shipmentName, private bool $canHandleProduct)
    {
    }
    /**
     * @return int
     */
    public function getId(): int
    {
    }
    /**
     * @return string
     */
    public function getShipmentName(): string
    {
    }
    /**
     * @return bool
     */
    public function getHandleProduct(): bool
    {
    }
}
