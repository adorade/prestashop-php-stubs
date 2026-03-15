<?php

namespace PrestaShop\PrestaShop\Core\Domain\Zone\Command;

/**
 * Command that edits zone
 */
class EditZoneCommand
{
    /**
     * @param int $zoneId
     */
    public function __construct(int $zoneId)
    {
    }
    /**
     * @return ZoneId
     */
    public function getZoneId(): \PrestaShop\PrestaShop\Core\Domain\Zone\ValueObject\ZoneId
    {
    }
    /**
     * @return string
     */
    public function getName(): string
    {
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
    }
    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
    }
    /**
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled): self
    {
    }
    /**
     * @return array|null
     */
    public function getShopAssociation(): ?array
    {
    }
    /**
     * @param array|null $shopAssociation
     *
     * @return self
     */
    public function setShopAssociation(?array $shopAssociation): self
    {
    }
}
