<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Cart;

#[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(isRewritable: true)]
class CartLazyArray extends \PrestaShop\PrestaShop\Adapter\Presenter\AbstractLazyArray
{
    public function __construct(\Cart $cart, \PrestaShop\PrestaShop\Adapter\Presenter\Cart\CartPresenter $cartPresenter, bool $shouldSeparateGifts = false)
    {
    }
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getProducts(): array
    {
    }
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getTotals(): array
    {
    }
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getSubtotals(): array
    {
    }
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getProductsCount(): int
    {
    }
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getSummaryString(): string
    {
    }
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getLabels(): array
    {
    }
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getIdAddressDelivery(): ?int
    {
    }
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getIdAddressInvoice(): ?int
    {
    }
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getIsVirtual(): bool
    {
    }
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getVouchers(): array
    {
    }
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getDiscounts(): array
    {
    }
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true, indexName: 'minimalPurchase')]
    public function getMinimalPurchase(): float
    {
    }
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true, indexName: 'minimalPurchaseRequired')]
    public function getMinimalPurchaseRequired(): string
    {
    }
}
