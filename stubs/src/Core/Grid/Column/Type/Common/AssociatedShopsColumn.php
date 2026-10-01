<?php

namespace PrestaShop\PrestaShop\Core\Grid\Column\Type\Common;

/**
 * Displays the list of shops a record is associated with (multistore grids).
 *
 * Purely presentational: expects the record to already carry the shop names ($field,
 * a list of strings), typically resolved in one batched query by a grid data factory
 * decorator. An empty list renders the $empty_label instead (e.g. "All stores" for
 * records associated with every shop).
 *
 * Unlike the product grid's shop_list column, this one has no expandable per-shop
 * preview — the product preview exists because product DATA differs per shop; a plain
 * association has nothing more to show than the list itself.
 */
final class AssociatedShopsColumn extends \PrestaShop\PrestaShop\Core\Grid\Column\AbstractColumn
{
    /**
     * {@inheritdoc}
     */
    public function getType()
    {
    }
}
