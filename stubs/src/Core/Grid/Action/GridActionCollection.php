<?php

namespace PrestaShop\PrestaShop\Core\Grid\Action;

/**
 * Class PanelActionCollection is responsible for holding single grid actions.
 *
 * @property GridActionInterface[] $items
 */
final class GridActionCollection extends \PrestaShop\PrestaShop\Core\Grid\Collection\AbstractCollection implements \PrestaShop\PrestaShop\Core\Grid\Action\GridActionCollectionInterface
{
    /**
     * {@inheritdoc}
     */
    public function add(\PrestaShop\PrestaShop\Core\Grid\Action\GridActionInterface $action)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
    }
}
