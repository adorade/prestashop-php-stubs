<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Cart;

class CartLazyArray extends \PrestaShop\PrestaShop\Adapter\Presenter\AbstractLazyArray
{
    public function __construct(\Cart $cart, \PrestaShop\PrestaShop\Adapter\Presenter\Cart\CartPresenter $cartPresenter, bool $shouldSeparateGifts = false)
    {
    }
    /**
     * @arrayAccess
     * @isRewritable
     */
    public function getProducts(): array
    {
    }
    /**
     * @arrayAccess
     * @isRewritable
     */
    public function getTotals(): array
    {
    }
    /**
     * @arrayAccess
     * @isRewritable
     */
    public function getSubtotals(): array
    {
    }
    /**
     * @arrayAccess
     * @isRewritable
     */
    public function getProductsCount(): int
    {
    }
    /**
     * @arrayAccess
     * @isRewritable
     */
    public function getSummaryString(): string
    {
    }
    /**
     * @arrayAccess
     * @isRewritable
     */
    public function getLabels(): array
    {
    }
    /**
     * @arrayAccess
     * @isRewritable
     */
    public function getIdAddressDelivery(): ?int
    {
    }
    /**
     * @arrayAccess
     * @isRewritable
     */
    public function getIdAddressInvoice(): ?int
    {
    }
    /**
     * @arrayAccess
     * @isRewritable
     */
    public function getIsVirtual(): bool
    {
    }
    /**
     * @arrayAccess
     * @isRewritable
     */
    public function getVouchers(): array
    {
    }
    /**
     * @arrayAccess
     * @isRewritable
     */
    public function getDiscounts(): array
    {
    }
    /**
     * @arrayAccess
     * @isRewritable
     *
     * @indexName "minimalPurchase"
     */
    public function getMinimalPurchase(): float
    {
    }
    /**
     * @arrayAccess
     * @isRewritable
     * @indexName "minimalPurchaseRequired"
     */
    public function getMinimalPurchaseRequired(): string
    {
    }
}
