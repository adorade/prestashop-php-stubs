<?php

namespace PrestaShop\PrestaShop\Adapter\Discount\Trait;

/**
 * We use a trait to check this structure, it avoids adding an extra getter on the CQRS structure that would
 * then be normalized by the API, while still factorizing the code.
 */
trait ProductConditionsTrait
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Discount\ProductRuleGroup[] $productConditions
     *
     * @return bool
     */
    public function isSegmentTargeted(array $productConditions): bool
    {
    }
}
