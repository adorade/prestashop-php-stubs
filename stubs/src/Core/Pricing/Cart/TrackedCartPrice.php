<?php

namespace PrestaShop\PrestaShop\Core\Pricing\Cart;

/**
 * Debug-aware CartPrice that auto-records every setter call as a PriceModification
 * via debug_backtrace, capturing which calculator made the change. Calculators are
 * completely unaware of the tracking — same interface as CartPrice.
 *
 * @experimental
 */
class TrackedCartPrice implements \PrestaShop\PrestaShop\Core\Pricing\Cart\CartPriceInterface
{
    protected \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice $productTotal;
    protected \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice $shippingTotal;
    protected \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice $wrappingTotal;
    protected \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice $discountTotal;
    protected \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice $cartTotal;
    /** @var \PrestaShop\PrestaShop\Core\Pricing\Product\ProductPriceInterface[] */
    protected array $productPrices = [];
    protected \PrestaShop\PrestaShop\Core\Pricing\ValueObject\PriceBreakdown $breakdown;
    protected function __construct(protected readonly int $cartId)
    {
    }
    public static function create(int $cartId): self
    {
    }
    public function getCartId(): int
    {
    }
    public function getProductTotal(): \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice
    {
    }
    public function setProductTotal(\PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice $productTotal): void
    {
    }
    public function getShippingTotal(): \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice
    {
    }
    public function setShippingTotal(\PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice $shippingTotal): void
    {
    }
    public function getWrappingTotal(): \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice
    {
    }
    public function setWrappingTotal(\PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice $wrappingTotal): void
    {
    }
    public function getDiscountTotal(): \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice
    {
    }
    public function setDiscountTotal(\PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice $discountTotal): void
    {
    }
    public function getCartTotal(): \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice
    {
    }
    public function setCartTotal(\PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice $cartTotal): void
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Pricing\Product\ProductPriceInterface[]
     */
    public function getProductPrices(): array
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Pricing\Product\ProductPriceInterface[] $productPrices
     */
    public function setProductPrices(array $productPrices): void
    {
    }
    public function getBreakdown(): \PrestaShop\PrestaShop\Core\Pricing\ValueObject\PriceBreakdown
    {
    }
    protected function recordModification(string $property, \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePriceInterface $previous, \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePriceInterface $new): void
    {
    }
}
