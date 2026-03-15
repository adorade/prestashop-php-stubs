<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\Command;

class UpdateCartDeliverySettingsCommand
{
    /**
     * @param int $cartId
     * @param bool $allowFreeShipping
     * @param bool|null $isAGift
     * @param bool|null $useRecycledPackaging
     * @param string|null $giftMessage
     */
    public function __construct(int $cartId, bool $allowFreeShipping, ?bool $isAGift = null, ?bool $useRecycledPackaging = null, ?string $giftMessage = null)
    {
    }
    /**
     * @return CartId
     */
    public function getCartId(): \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId
    {
    }
    /**
     * @return bool
     */
    public function allowFreeShipping(): bool
    {
    }
    /**
     * @return bool|null
     */
    public function isAGift(): ?bool
    {
    }
    /**
     * @return bool|null
     */
    public function useRecycledPackaging(): ?bool
    {
    }
    /**
     * @return string|null
     */
    public function getGiftMessage(): ?string
    {
    }
}
