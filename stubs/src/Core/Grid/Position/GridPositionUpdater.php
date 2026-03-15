<?php

namespace PrestaShop\PrestaShop\Core\Grid\Position;

/**
 * Class GridPositionUpdater, this class is responsible for updating the position of items
 * of a grid using the information from a PositionUpdateInterface object.
 */
final class GridPositionUpdater implements \PrestaShop\PrestaShop\Core\Grid\Position\GridPositionUpdaterInterface
{
    /**
     * @param PositionUpdateHandlerInterface $updateHandler
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Position\UpdateHandler\PositionUpdateHandlerInterface $updateHandler)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function update(\PrestaShop\PrestaShop\Core\Grid\Position\PositionUpdateInterface $positionUpdate)
    {
    }
}
