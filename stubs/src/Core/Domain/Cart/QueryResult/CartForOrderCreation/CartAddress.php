<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation;

/**
 * Holds address data for cart information
 */
class CartAddress
{
    /**
     * @param int $addressId
     * @param string $alias
     * @param string $formattedAddress
     * @param bool $delivery
     * @param bool $invoice
     */
    public function __construct(int $addressId, string $alias, string $formattedAddress, bool $delivery, bool $invoice)
    {
    }
    /**
     * @return int
     */
    public function getAddressId(): int
    {
    }
    /**
     * @return string
     */
    public function getAlias(): string
    {
    }
    /**
     * @return string
     */
    public function getFormattedAddress(): string
    {
    }
    /**
     * @return bool
     */
    public function isDelivery(): bool
    {
    }
    /**
     * @return bool
     */
    public function isInvoice(): bool
    {
    }
}
