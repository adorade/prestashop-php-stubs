<?php

namespace PrestaShop\PrestaShop\Core\Pricing\Cart;

/**
 * Lightweight CartPrice DTO with no tracking overhead. Setters simply assign values.
 *
 * @experimental
 */
class CartPrice implements \PrestaShop\PrestaShop\Core\Pricing\Cart\CartPriceInterface
{
    protected \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice $productTotal;
    protected \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice $shippingTotal;
    protected \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice $wrappingTotal;
    protected \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice $discountTotal;
    protected \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice $cartTotal;
    /** @var \PrestaShop\PrestaShop\Core\Pricing\Product\ProductPriceInterface[] */
    protected array $productPrices = [];
    protected function __construct(protected readonly int $cartId)
    {
    }
    public static function create(int $cartId): static
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
}
