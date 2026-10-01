<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation;

/**
 * Holds cart summary data
 */
class CartSummary
{
    /**
     * @param string $totalProductsPrice
     * @param string $totalDiscount
     * @param string $totalShippingPrice
     * @param string $totalShippingWithoutTaxes
     * @param string $totalTaxes
     * @param string $totalPriceWithTaxes
     * @param string $totalPriceWithoutTaxes
     * @param string $orderMessage
     * @param string $processOrderLink
     */
    public function __construct(private string $totalProductsPrice, private string $totalDiscount, private string $totalShippingPrice, private string $totalShippingWithoutTaxes, private string $totalTaxes, private string $totalPriceWithTaxes, private string $totalPriceWithoutTaxes, private string $orderMessage, private string $processOrderLink)
    {
    }
    /**
     * @return string
     */
    public function getTotalProductsPrice(): string
    {
    }
    public function getTotalDiscount(): string
    {
    }
    public function getTotalShippingPrice(): string
    {
    }
    public function getTotalShippingWithoutTaxes(): string
    {
    }
    public function getTotalTaxes(): string
    {
    }
    public function getTotalPriceWithTaxes(): string
    {
    }
    public function getTotalPriceWithoutTaxes(): string
    {
    }
    public function getProcessOrderLink(): string
    {
    }
    public function getOrderMessage(): string
    {
    }
}
