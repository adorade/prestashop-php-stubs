<?php

namespace PrestaShop\PrestaShop\Core\Domain\Zone\Command;

/**
 * Adds new zone with provided data.
 */
class AddZoneCommand
{
    /**
     * @param string $name
     * @param bool $enabled
     * @param array $shopAssociation
     */
    public function __construct(string $name, bool $enabled, array $shopAssociation)
    {
    }
    /**
     * @return string
     */
    public function getName(): string
    {
    }
    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
    }
    /**
     * @return array
     */
    public function getShopAssociation(): array
    {
    }
}
