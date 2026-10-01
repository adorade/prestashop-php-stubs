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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Carrier\Exception\CarrierConstraintException
     */
    public function __construct(int $carrierId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId
     */
    public function getCarrierId(): \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId
    {
    }
}
