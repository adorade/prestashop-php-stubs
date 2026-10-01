<?php

namespace PrestaShop\PrestaShop\Core\Grid\Column\Type\Common;

/**
 * Displays discount usage as "quantityUsed / totalQuantity" with an infinity symbol for unlimited discounts.
 */
final class DiscountUsageColumn extends \PrestaShop\PrestaShop\Core\Grid\Column\AbstractColumn
{
    /**
     * {@inheritdoc}
     */
    public function getType()
    {
    }
}
