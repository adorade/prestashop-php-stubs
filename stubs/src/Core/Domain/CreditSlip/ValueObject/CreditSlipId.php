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
     * @throws CreditSlipConstraintException
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
