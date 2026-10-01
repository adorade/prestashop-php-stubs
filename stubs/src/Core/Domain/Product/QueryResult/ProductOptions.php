<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryResult;

/**
 * Holds product options information
 */
class ProductOptions
{
    /**
     * @param string $visibility
     * @param bool $availableForOrder
     * @param bool $onlineOnly
     * @param bool $showPrice
     * @param string $condition
     * @param bool $showCondition
     * @param int $manufacturerId
     */
    public function __construct(string $visibility, bool $availableForOrder, bool $onlineOnly, bool $showPrice, string $condition, bool $showCondition, int $manufacturerId)
    {
    }
    /**
     * @return string
     */
    public function getVisibility(): string
    {
    }
    /**
     * @return bool
     */
    public function isAvailableForOrder(): bool
    {
    }
    /**
     * @return bool
     */
    public function isOnlineOnly(): bool
    {
    }
    /**
     * @return bool
     */
    public function showPrice(): bool
    {
    }
    /**
     * @return string
     */
    public function getCondition(): string
    {
    }
    /**
     * @return bool
     */
    public function showCondition(): bool
    {
    }
    /**
     * @return int
     */
    public function getManufacturerId(): int
    {
    }
}
