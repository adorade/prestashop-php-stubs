<?php

namespace PrestaShop\PrestaShop\Core\Pricing\Debug;

/**
 * Formats a TrackedCartPrice's PriceBreakdown into human-readable strings
 * or structured arrays. Delegates product-level history formatting to
 * ProductPriceHistoryDisplayer.
 *
 * @experimental
 */
class CartPriceHistoryDisplayer
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Core\Pricing\Debug\ProductPriceHistoryDisplayer $productPriceHistoryDisplayer)
    {
    }
    /**
     * Formats a CartPrice's breakdown as a human-readable string, including
     * indented product-level breakdowns for each product in the cart.
     */
    public function formatAsString(\PrestaShop\PrestaShop\Core\Pricing\Cart\CartPriceInterface $cartPrice): string
    {
    }
    /**
     * Formats a CartPrice's breakdown as a structured array, with a sub-array
     * for each product's history.
     *
     * @return array{cart: array, products: array<int, array{product_id: int, combination_id: int, quantity: int, history: array}>}
     */
    public function formatAsArray(\PrestaShop\PrestaShop\Core\Pricing\Cart\CartPriceInterface $cartPrice): array
    {
    }
    protected function indent(string $text): string
    {
    }
}
