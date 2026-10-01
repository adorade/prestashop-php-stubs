<?php

namespace PrestaShop\PrestaShop\Core\Domain\Discount\QueryResult;

class DiscountType
{
    /**
     * @param int $discountTypeId
     * @param string $type
     * @param array<int, string> $localizedNames indexed by language ID
     * @param array<int, string> $localizedDescriptions indexed by language ID
     * @param bool $isCore
     * @param bool $enabled
     */
    public function __construct(private readonly int $discountTypeId, private readonly string $type, private readonly array $localizedNames, private readonly array $localizedDescriptions, private readonly bool $isCore = false, private readonly bool $enabled = true)
    {
    }
    public function getDiscountTypeId(): int
    {
    }
    public function getType(): string
    {
    }
    public function getLocalizedNames(): array
    {
    }
    public function getLocalizedDescriptions(): array
    {
    }
    public function isCore(): bool
    {
    }
    public function isEnabled(): bool
    {
    }
}
