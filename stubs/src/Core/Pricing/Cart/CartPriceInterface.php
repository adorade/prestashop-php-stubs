<?php

namespace PrestaShop\PrestaShop\Core\Pricing\Cart;

/**
 * Mutable DTO carrying the computed prices for a cart.
 * Calculators receive this and mutate it in place.
 *
 * @experimental
 */
interface CartPriceInterface
{
    public function getCartId(): int;
    public function getProductTotal(): \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice;
    public function setProductTotal(\PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice $productTotal): void;
    public function getShippingTotal(): \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice;
    public function setShippingTotal(\PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice $shippingTotal): void;
    public function getWrappingTotal(): \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice;
    public function setWrappingTotal(\PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice $wrappingTotal): void;
    public function getDiscountTotal(): \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice;
    public function setDiscountTotal(\PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice $discountTotal): void;
    public function getCartTotal(): \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice;
    public function setCartTotal(\PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice $cartTotal): void;
    /**
     * @return \PrestaShop\PrestaShop\Core\Pricing\Product\ProductPriceInterface[]
     */
    public function getProductPrices(): array;
    /**
     * @param \PrestaShop\PrestaShop\Core\Pricing\Product\ProductPriceInterface[] $productPrices
     */
    public function setProductPrices(array $productPrices): void;
}
