<?php

namespace PrestaShop\PrestaShop\Core\Grid\Position\UpdateHandler;

/**
 * Class DoctrinePositionUpdateHandler updates the grid positions using a Doctrine
 * Connection.
 */
final class DoctrinePositionUpdateHandler implements \PrestaShop\PrestaShop\Core\Grid\Position\UpdateHandler\PositionUpdateHandlerInterface
{
    /**
     * @param Connection $connection
     * @param string $dbPrefix
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, $dbPrefix)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getCurrentPositions(\PrestaShop\PrestaShop\Core\Grid\Position\PositionDefinitionInterface $positionDefinition, $parentId = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function updatePositions(\PrestaShop\PrestaShop\Core\Grid\Position\PositionDefinitionInterface $positionDefinition, array $newPositions, $parentId = null)
    {
    }
}
