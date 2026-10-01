<?php

namespace PrestaShop\PrestaShop\Adapter\Carrier\Update;

/**
 * Moves a carrier to a new position, and updates the position of the other carriers accordingly.
 *
 * The same services as the carriers list are used, so assigning a position through a command has the same effect as
 * dragging and dropping the carrier in the list: the carriers between the old and the new position are shifted, and no
 * two carriers end up sharing a position.
 */
class CarrierPositionUpdater
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Grid\Position\PositionUpdateFactoryInterface $positionUpdateFactory, private readonly \PrestaShop\PrestaShop\Core\Grid\Position\PositionDefinition $positionDefinition, private readonly \PrestaShop\PrestaShop\Core\Grid\Position\GridPositionUpdaterInterface $positionUpdater)
    {
    }
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Carrier\Exception\CannotUpdateCarrierException
     */
    public function updatePosition(\PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId $carrierId, int $oldPosition, int $newPosition): void
    {
    }
}
