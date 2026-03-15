<?php

namespace PrestaShop\PrestaShop\Core\Grid\Position;

/**
 * Class PositionUpdateFactory is a basic implementation of the PositionUpdateFactoryInterface,
 * it transforms the provided array data into a PositionUpdate object.
 */
final class PositionUpdateFactory implements \PrestaShop\PrestaShop\Core\Grid\Position\PositionUpdateFactoryInterface
{
    public const POSITION_KEY = 'Invalid position %i data, missing %s field.';
    /**
     * @param string $positionsField
     * @param string $rowIdField
     * @param string $oldPositionField
     * @param string $newPositionField
     * @param string $parentIdField
     */
    public function __construct($positionsField, $rowIdField, $oldPositionField, $newPositionField, $parentIdField)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildPositionUpdate(array $data, \PrestaShop\PrestaShop\Core\Grid\Position\PositionDefinition $positionDefinition)
    {
    }
}
