<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject;

/**
 * Carriers are referenced by id_reference (instead of usual primary id as most entities)
 */
class CarrierReferenceId
{
    /**
     * @param int $carrierReferenceId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Carrier\Exception\CarrierConstraintException
     */
    public function __construct($carrierReferenceId)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
