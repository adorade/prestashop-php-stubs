<?php

namespace PrestaShop\PrestaShop\Core\Pricing\Debug;

/**
 * Request-scoped collector of all computed ProductPrice and CartPrice instances.
 * The orchestrator registers each result here for debug toolbar / profiler usage.
 */
class PricingRegistry
{
    /** @var \PrestaShop\PrestaShop\Core\Pricing\Product\ProductPriceInterface[] */
    protected array $productPrices = [];
    /** @var \PrestaShop\PrestaShop\Core\Pricing\Cart\CartPriceInterface[] */
    protected array $cartPrices = [];
    public function registerProductPrice(\PrestaShop\PrestaShop\Core\Pricing\Product\ProductPriceInterface $productPrice): void
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Pricing\Product\ProductPriceInterface[]
     */
    public function getProductPrices(): array
    {
    }
    public function registerCartPrice(\PrestaShop\PrestaShop\Core\Pricing\Cart\CartPriceInterface $cartPrice): void
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Pricing\Cart\CartPriceInterface[]
     */
    public function getCartPrices(): array
    {
    }
    public function count(): int
    {
    }
    public function clear(): void
    {
    }
}
