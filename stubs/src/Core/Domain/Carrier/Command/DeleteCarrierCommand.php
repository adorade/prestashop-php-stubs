<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\Command;

/**
 * Deletes carrier
 */
class DeleteCarrierCommand
{
    /**
     * @param int $carrierId
     *
     * @throws CarrierConstraintException
     */
    public function __construct(int $carrierId)
    {
    }
    /**
     * @return CarrierId
     */
    public function getCarrierId(): \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId
    {
    }
}
