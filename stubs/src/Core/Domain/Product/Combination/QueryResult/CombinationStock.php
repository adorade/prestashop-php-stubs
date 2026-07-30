<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryResult;

class CombinationStock
{
    /**
     * @param int $quantity
     * @param int $minimalQuantity
     * @param int $lowStockThreshold
     * @param bool $lowStockAlertEnabled
     * @param string $location
     * @param DateTimeInterface|null $availableDate
     */
    public function __construct(int $quantity, int $minimalQuantity, int $lowStockThreshold, bool $lowStockAlertEnabled, string $location, ?\DateTimeInterface $availableDate, array $localizedAvailableNowLabels, array $localizedAvailableLaterLabels)
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
     * @return string
     */
    public function getLocation(): string
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
     * @return DateTimeInterface|null
     */
    public function getAvailableDate(): ?\DateTimeInterface
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
}
