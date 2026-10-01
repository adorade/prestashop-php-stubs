<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryResult;

class OrderShippingForViewing
{
    /**
     * @param OrderCarrierForViewing[] $carriers
     * @param bool $isRecycledPackaging
     * @param bool $isGiftWrapping
     * @param string|null $giftMessage
     * @param string|null $carrierModuleInfo
     */
    public function __construct(array $carriers, bool $isRecycledPackaging, bool $isGiftWrapping, ?string $giftMessage, ?string $carrierModuleInfo)
    {
    }
    /**
     * hint - collection of OrderCarrierForViewing objects would be better
     *
     * @return OrderCarrierForViewing[]
     */
    public function getCarriers(): array
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
    public function isGiftWrapping(): bool
    {
    }
    /**
     * @return string|null
     */
    public function getCarrierModuleInfo(): ?string
    {
    }
    /**
     * @return string|null
     */
    public function getGiftMessage(): ?string
    {
    }
}
