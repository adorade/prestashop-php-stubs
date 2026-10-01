<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturn\QueryResult;

/**
 * Represents a single product row of the merchandise return edit form.
 *
 * A row can either be a classic product line (customizationId === 0) or a
 * customized product line; in the latter case $customizationFields holds the
 * customer-provided data (file thumbnails, text inputs).
 */
class OrderReturnProductForEditing
{
    /**
     * @param OrderReturnCustomizationFieldForEditing[] $customizationFields
     */
    public function __construct(int $orderDetailId, int $customizationId, string $reference, string $productName, int $quantity, bool $isCustomization, array $customizationFields = [])
    {
    }
    public function getOrderDetailId(): int
    {
    }
    public function getCustomizationId(): int
    {
    }
    public function getReference(): string
    {
    }
    public function getProductName(): string
    {
    }
    public function getQuantity(): int
    {
    }
    public function isCustomization(): bool
    {
    }
    /**
     * @return OrderReturnCustomizationFieldForEditing[]
     */
    public function getCustomizationFields(): array
    {
    }
}
