<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\QueryResult;

class ShipmentsForProduct
{
    public function __construct(private int $id, private string $name)
    {
    }
    public function getId(): int
    {
    }
    public function getName(): string
    {
    }
    public function toArray(): array
    {
    }
}
