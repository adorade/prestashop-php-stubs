<?php

namespace PrestaShop\PrestaShop\Core\Domain\Discount;

/**
 * The product rules have an OR/|| condition between them so the minimum quantity of products (defined on the
 * parent group) must match one or several rules defined.
 *
 * A product rule is defined by the type of entity it matches (products, categories, ...) and a list of item IDs
 * for this specific entity.
 */
class ProductRule
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Domain\Discount\ProductRuleType $type, private readonly array $itemIds)
    {
    }
    public function getType(): \PrestaShop\PrestaShop\Core\Domain\Discount\ProductRuleType
    {
    }
    public function getItemIds(): array
    {
    }
}
