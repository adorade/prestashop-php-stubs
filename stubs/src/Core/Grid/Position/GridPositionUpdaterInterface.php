<?php

namespace PrestaShop\PrestaShop\Core\Grid\Position;

/**
 * Interface GridPositionUpdaterInterface, this interface is responsible for updating the position of items
 * of a grid using the information from a PositionUpdateInterface object.
 */
interface GridPositionUpdaterInterface
{
    /**
     * Updates a grid based on the data in PositionUpdateInterface composed
     * of the PositionDefinitionInterface allowing to build the query, the
     * new positions and optionally a parentId
     * Throws a PositionUpdateException if something went wrong.
     *
     * @param PositionUpdateInterface $positionUpdate
     *
     * @throws PositionUpdateException
     */
    public function update(\PrestaShop\PrestaShop\Core\Grid\Position\PositionUpdateInterface $positionUpdate);
}
