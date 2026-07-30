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
    public function __construct(string $totalProductsPrice, string $totalDiscount, string $totalShippingPrice, string $totalShippingWithoutTaxes, string $totalTaxes, string $totalPriceWithTaxes, string $totalPriceWithoutTaxes, string $orderMessage, string $processOrderLink)
    {
    }
    /**
     * @return string
     */
    public function getTotalProductsPrice(): string
    {
    }
    /**
     * @return string
     */
    public function getTotalDiscount(): string
    {
    }
    /**
     * @return string
     */
    public function getTotalShippingPrice(): string
    {
    }
    /**
     * @return string
     */
    public function getTotalShippingWithoutTaxes(): string
    {
    }
    /**
     * @return string
     */
    public function getTotalTaxes(): string
    {
    }
    /**
     * @return string
     */
    public function getTotalPriceWithTaxes(): string
    {
    }
    /**
     * @return string
     */
    public function getTotalPriceWithoutTaxes(): string
    {
    }
    /**
     * @return string
     */
    public function getProcessOrderLink(): string
    {
    }
    /**
     * @return string
     */
    public function getOrderMessage(): string
    {
    }
}
