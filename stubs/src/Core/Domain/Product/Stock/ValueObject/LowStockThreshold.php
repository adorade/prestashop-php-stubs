<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject;

class LowStockThreshold
{
    /**
     * Represents a value when low stock alert is considered disabled, therefore the threshold is irrelevant
     */
    public const DISABLED_VALUE = 0;
    public function __construct(int $thresholdValue)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
    public function isEnabled(): bool
    {
    }
}
