<?php

namespace PrestaShop\PrestaShop\Core\Grid\Position;

/**
 * Class PositionUpdate contains the modifications needed
 * to update the grid positions.
 */
final class PositionUpdate implements \PrestaShop\PrestaShop\Core\Grid\Position\PositionUpdateInterface
{
    /**
     * @param PositionModificationCollectionInterface $positionModificationCollection
     * @param PositionDefinitionInterface $positionDefinition
     * @param string|null $parentId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Position\PositionModificationCollectionInterface $positionModificationCollection, \PrestaShop\PrestaShop\Core\Grid\Position\PositionDefinitionInterface $positionDefinition, $parentId = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getPositionDefinition()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getPositionModificationCollection()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getParentId()
    {
    }
}
