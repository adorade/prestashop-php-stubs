<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\Query;

/**
 * Get available carriers for a product list.
 */
class GetAvailableCarriers
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductQuantity[] $productQuantities
     */
    public function __construct(array $productQuantities, \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId $addressId, ?int $currentCarrierId = null)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductQuantity[]
     */
    public function getProductQuantities(): array
    {
    }
    /**
     * @return int[]
     */
    public function getProductIds(): array
    {
    }
    public function getAddressId(): \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId
    {
    }
    public function setAddressId(\PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId $addressId): void
    {
    }
    public function getCurrentCarrierId(): ?int
    {
    }
}
