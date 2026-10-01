<?php

namespace PrestaShop\PrestaShop\Core\Pricing\Debug;

/**
 * Formats a TrackedProductPrice's PriceBreakdown into human-readable strings
 * or structured arrays suitable for Twig rendering in the debug toolbar.
 */
class ProductPriceHistoryDisplayer
{
    /**
     * Formats a ProductPrice's breakdown as a human-readable string.
     */
    public function formatAsString(\PrestaShop\PrestaShop\Core\Pricing\Product\ProductPriceInterface $productPrice): string
    {
    }
    /**
     * Formats a ProductPrice's breakdown as a structured array for rendering.
     *
     * @return array<int, array{caller: string, line: int, property: string, previous: string, new: string}>
     */
    public function formatAsArray(\PrestaShop\PrestaShop\Core\Pricing\Product\ProductPriceInterface $productPrice): array
    {
    }
    /**
     * @return string
     */
    public function formatBreakdownAsString(\PrestaShop\PrestaShop\Core\Pricing\ValueObject\PriceBreakdown $breakdown): string
    {
    }
    /**
     * @return array<int, array{caller: string, line: int, property: string, previous: string, new: string}>
     */
    public function formatBreakdownAsArray(\PrestaShop\PrestaShop\Core\Pricing\ValueObject\PriceBreakdown $breakdown): array
    {
    }
    protected function getShortClassName(string $fqcn): string
    {
    }
}
