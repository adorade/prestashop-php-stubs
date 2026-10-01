<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturn\QueryResult;

/**
 * One customer-provided value attached to a customized return product line.
 * Mirrors Product::CUSTOMIZE_FILE / CUSTOMIZE_TEXTFIELD pairs.
 */
class OrderReturnCustomizationFieldForEditing
{
    public function __construct(int $type, string $value)
    {
    }
    public function getType(): int
    {
    }
    public function getValue(): string
    {
    }
}
