<?php

namespace PrestaShop\PrestaShop\Core\Grid\Position;

/**
 * Interface PositionUpdateFactoryInterface is used to interpret the provided
 * data array and transform it in a fully filled PositionUpdate object.
 */
interface PositionUpdateFactoryInterface
{
    /**
     * Transform the provided data into a PositionUpdate.
     *
     * @param array $data
     * @param PositionDefinition $positionDefinition
     *
     * @return PositionUpdate
     *
     * @throws PositionDataException
     */
    public function buildPositionUpdate(array $data, \PrestaShop\PrestaShop\Core\Grid\Position\PositionDefinition $positionDefinition);
}
