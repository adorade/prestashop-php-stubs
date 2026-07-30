<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation;

/**
 * Holds data for cart shipping information
 */
class CartShipping
{
    /**
     * @param string $shippingPrice
     * @param bool $freeShipping
     * @param CartDeliveryOption[] $deliveryOptions
     * @param int|null $selectedCarrierId
     * @param bool $isGift
     * @param bool $isRecycledPackaging
     * @param string $giftMessage
     */
    public function __construct(string $shippingPrice, bool $freeShipping, array $deliveryOptions, ?int $selectedCarrierId, bool $isGift, bool $isRecycledPackaging, string $giftMessage)
    {
    }
    /**
     * @return string
     */
    public function getShippingPrice(): string
    {
    }
    /**
     * @return bool
     */
    public function isFreeShipping(): bool
    {
    }
    /**
     * @return CartDeliveryOption[]
     */
    public function getDeliveryOptions(): array
    {
    }
    /**
     * @return mixed
     */
    public function getSelectedCarrierId()
    {
    }
    /**
     * @return bool
     */
    public function isRecycledPackaging(): bool
    {
    }
    /**
     * @return bool
     */
    public function isGift(): bool
    {
    }
    /**
     * @return string
     */
    public function getGiftMessage(): string
    {
    }
}
