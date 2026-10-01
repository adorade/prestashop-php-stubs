<?php

namespace PrestaShop\PrestaShop\Core\Grid\Column\Type\Common;

/**
 * Class PositionColumn defines a position column used to sort elements in a grid,
 * it is associated to a special template, and works well with the PositionExtension
 * javascript extension and the GridPositionUpdater service.
 *
 * @see admin-dev/themes/new-theme/js/components/grid/extension/position-extension.js
 * @see GridPositionUpdater
 */
final class PositionColumn extends \PrestaShop\PrestaShop\Core\Grid\Column\AbstractColumn
{
    /**
     * {@inheritdoc}
     */
    public function getType()
    {
    }
}
