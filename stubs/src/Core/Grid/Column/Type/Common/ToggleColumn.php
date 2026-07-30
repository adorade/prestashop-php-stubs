<?php

namespace PrestaShop\PrestaShop\Core\Grid\Column\Type\Common;

/**
 * This Column is used to display booleans.
 * - it will display an icon instead of the value
 * - if user clicks on it, this triggers a toggle of the boolean value.
 */
final class ToggleColumn extends \PrestaShop\PrestaShop\Core\Grid\Column\AbstractColumn
{
    /**
     * {@inheritdoc}
     */
    public function getType()
    {
    }
}
