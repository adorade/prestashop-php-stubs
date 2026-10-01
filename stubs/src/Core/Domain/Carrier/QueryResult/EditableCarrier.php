<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\QueryResult;

/**
 * Stores carrier data that's needed for editing.
 */
class EditableCarrier
{
    public function __construct(
        private int $carrierId,
        private string $name,
        private int $grade,
        private string $trackingUrl,
        private int $position,
        private bool $active,
        /** @var string[] $delay */
        private array $delay,
        private int $max_width,
        private int $max_height,
        private int $max_depth,
        private float $max_weight,
        private array $associatedGroupIds,
        private bool $hasAdditionalHandlingFee,
        private bool $isFree,
        private int $shippingMethod,
        private int $idTaxRuleGroup,
        private int $rangeBehavior,
        private array $associatedShopIds,
        private array $zones,
        private ?string $logoPath = null,
        private int $ordersCount = 0
    )
    {
    }
    public function getZones(): array
    {
    }
    public function getCarrierId(): int
    {
    }
    public function getName(): string
    {
    }
    public function getGrade(): int
    {
    }
    public function getTrackingUrl(): string
    {
    }
    public function getPosition(): int
    {
    }
    public function isActive(): bool
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedDelay(): array
    {
    }
    public function getLogoPath(): ?string
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
    public function hasAdditionalHandlingFee(): bool
    {
    }
    public function isFree(): bool
    {
    }
    public function getShippingMethod(): int
    {
    }
    public function getIdTaxRuleGroup(): int
    {
    }
    public function getRangeBehavior(): int
    {
    }
    /**
     * @return int[]
     */
    public function getAssociatedShopIds(): array
    {
    }
    public function getOrdersCount(): int
    {
    }
}
