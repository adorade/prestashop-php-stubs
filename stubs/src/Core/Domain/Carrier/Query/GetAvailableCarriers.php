<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\Query;

/**
 * Get available carriers for a product list.
 */
class GetAvailableCarriers
{
    /**
     * The keys are declared optional because the payloads assembled at runtime (by the Admin API in particular) offer
     * no guarantee: each entry is validated to hold both keys, with a strictly positive quantity.
     *
     * @param array<array{productId?: int, quantity?: int}> $productQuantities
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Carrier\Exception\CarrierConstraintException
     */
    public function __construct(array $productQuantities, int $addressId, ?int $currentCarrierId = null)
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
    public function setAddressId(int $addressId): void
    {
    }
    public function getCurrentCarrierId(): ?int
    {
    }
}
