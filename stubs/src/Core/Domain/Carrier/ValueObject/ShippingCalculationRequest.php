<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject;

final class ShippingCalculationRequest
{
    /**
     * @param array<array{
     *     id_product: int,
     *     id_product_attribute: int,
     *     quantity: int,
     *     weight: float,
     *     weight_attribute: float|null,
     *     is_virtual: bool,
     *     additional_shipping_cost: float,
     *     price_wt: float
     * }> $products Array of product data for shipping calculation
     * @param int $carrierId Carrier ID
     * @param int|null $zoneId Zone ID (optional, will be resolved from address or country)
     * @param int|null $addressId Delivery address ID
     * @param int $countryZoneId Country's default zone ID (fallback)
     * @param int $currencyId Currency ID
     * @param int|null $customerId Customer ID
     * @param float $orderTotal Total order amount
     *
     * @throws \InvalidArgumentException If products array is invalid or missing required fields
     */
    public function __construct(private readonly array $products, private readonly int $carrierId, private readonly ?int $zoneId, private readonly ?int $addressId, private readonly int $countryZoneId, private readonly int $currencyId, private readonly ?int $customerId, private readonly float $orderTotal)
    {
    }
    /**
     * @return array<array{
     *     id_product: int,
     *     id_product_attribute: int,
     *     quantity: int,
     *     weight: float,
     *     weight_attribute: float|null,
     *     is_virtual: bool,
     *     additional_shipping_cost: float,
     *     price_wt: float
     * }>
     */
    public function getProducts(): array
    {
    }
    public function getCarrierId(): int
    {
    }
    public function getZoneId(): ?int
    {
    }
    public function getAddressId(): ?int
    {
    }
    public function getCountryZoneId(): int
    {
    }
    public function getCurrencyId(): int
    {
    }
    public function getCustomerId(): ?int
    {
    }
    public function getOrderTotal(): float
    {
    }
}
