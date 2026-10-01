<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\Command;

/**
 * Command aim to add carrier
 */
class AddCarrierCommand
{
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Carrier\Exception\CarrierConstraintException
     */
    public function __construct(
        private string $name,
        /** @var string[] $localizedDelay */
        private array $localizedDelay,
        private int $grade,
        private string $trackingUrl,
        private bool $active,
        private array $associatedGroupIds,
        private bool $hasAdditionalHandlingFee,
        private bool $isFree,
        int $shippingMethod,
        int $rangeBehavior,
        /** @var int[] $zones */
        private array $zones,
        array $associatedShopIds,
        private int $max_width = 0,
        private int $max_height = 0,
        private int $max_depth = 0,
        private float $max_weight = 0,
        private ?string $logoPathName = null
    )
    {
    }
    public function getName(): string
    {
    }
    /** @return string[] */
    public function getLocalizedDelay(): array
    {
    }
    public function getGrade(): int
    {
    }
    public function getTrackingUrl(): string
    {
    }
    public function getPosition(): ?int
    {
    }
    public function setPosition(int $position): void
    {
    }
    public function getActive(): bool
    {
    }
    public function getMaxWidth(): int
    {
    }
    public function getMaxHeight(): int
    {
    }
    public function getMaxDepth(): int
    {
    }
    public function getMaxWeight(): float
    {
    }
    public function getAssociatedGroupIds(): array
    {
    }
    public function getLogoPathName(): ?string
    {
    }
    public function hasAdditionalHandlingFee(): bool
    {
    }
    public function isFree(): bool
    {
    }
    public function getShippingMethod(): \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\ShippingMethod
    {
    }
    public function getRangeBehavior(): \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\OutOfRangeBehavior
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[]
     */
    public function getAssociatedShopIds(): array
    {
    }
    /**
     * @return int[]
     */
    public function getZones(): array
    {
    }
}
