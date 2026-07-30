<?php

namespace PrestaShop\PrestaShop\Core\Grid\Position;

/**
 * Class PositionDefinition used to define a position relationship, see
 * PositionDefinitionInterface for more details.
 */
final class PositionDefinition implements \PrestaShop\PrestaShop\Core\Grid\Position\PositionDefinitionInterface
{
    /**
     * @param string $table
     * @param string $idField
     * @param string $positionField
     * @param string|null $parentIdField
     * @param int $firstPosition
     */
    public function __construct($table, $idField, $positionField, $parentIdField = null, int $firstPosition = 0)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getTable()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getIdField()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getPositionField()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getParentIdField()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFirstPosition(): int
    {
    }
}
