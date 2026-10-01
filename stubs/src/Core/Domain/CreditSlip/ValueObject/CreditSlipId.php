<?php

namespace PrestaShop\PrestaShop\Core\Domain\CreditSlip\ValueObject;

/**
 * Provides identification data for Credit slip
 */
final class CreditSlipId
{
    /**
     * @param int $creditSlipId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\CreditSlip\Exception\CreditSlipConstraintException
     */
    public function __construct($creditSlipId)
    {
    }
    /**
     * @return int
     */
    public function getValue()
    {
    }
}
