<?php

namespace PrestaShop\PrestaShop\Core\Domain\Discount;

/**
 * Product rule groups have an AND/&& condition between them, meaning if multiple groups are set
 * on a discount they all must be satisfied for the discount to be valid.
 *
 * Each group is associated with a specific minimum quantity of products that must respect the specified
 * rules. However, the product rules have an OR/|| condition between them so the minimum quantity must
 * match one or several rules defined.
 */
class ProductRuleGroup
{
    public static function fromArray(array $data): \PrestaShop\PrestaShop\Core\Domain\Discount\ProductRuleGroup
    {
    }
    /**
     * @param int $quantity
     * @param ProductRule[] $rules
     * @param ProductRuleGroupType $type
     */
    public function __construct(private readonly int $quantity, private readonly array $rules, private readonly \PrestaShop\PrestaShop\Core\Domain\Discount\ProductRuleGroupType $type = \PrestaShop\PrestaShop\Core\Domain\Discount\ProductRuleGroupType::AT_LEAST_ONE_PRODUCT_RULE)
    {
    }
    public function getQuantity(): int
    {
    }
    /**
     * @return ProductRule[]
     */
    public function getRules(): array
    {
    }
    public function getType(): \PrestaShop\PrestaShop\Core\Domain\Discount\ProductRuleGroupType
    {
    }
}
