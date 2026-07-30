<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryResult;

/**
 * Transfers data about Product stock information
 */
class ProductStockInformation
{
    /**
     * @param int $packStockType
     * @param int $outOfStockType
     * @param int $quantity
     * @param int $minimalQuantity
     * @param int $lowStockThreshold
     * @param bool $lowStockAlertEnabled
     * @param array $localizedAvailableNowLabels
     * @param array $localizedAvailableLaterLabels
     * @param string $location
     * @param DateTimeInterface|null $availableDate
     */
    public function __construct(int $packStockType, int $outOfStockType, int $quantity, int $minimalQuantity, int $lowStockThreshold, bool $lowStockAlertEnabled, array $localizedAvailableNowLabels, array $localizedAvailableLaterLabels, string $location, ?\DateTimeInterface $availableDate)
    {
    }
    /**
     * @return int
     */
    public function getPackStockType(): int
    {
    }
    /**
     * @return int
     */
    public function getOutOfStockType(): int
    {
    }
    /**
     * @return int
     */
    public function getQuantity(): int
    {
    }
    /**
     * @return int
     */
    public function getMinimalQuantity(): int
    {
    }
    /**
     * @return int
     */
    public function getLowStockThreshold(): int
    {
    }
    /**
     * @return bool
     */
    public function isLowStockAlertEnabled(): bool
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedAvailableNowLabels(): array
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedAvailableLaterLabels(): array
    {
    }
    /**
     * @return string
     */
    public function getLocation(): string
    {
    }
    /**
     * @return DateTimeInterface|null
     */
    public function getAvailableDate(): ?\DateTimeInterface
    {
    }
}
