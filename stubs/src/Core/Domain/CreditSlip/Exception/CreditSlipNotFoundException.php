<?php

namespace PrestaShop\PrestaShop\Core\Domain\CreditSlip\Exception;

/**
 * Thrown when requested credit slip/slips are not found
 */
class CreditSlipNotFoundException extends \PrestaShop\PrestaShop\Core\Domain\CreditSlip\Exception\CreditSlipException
{
    /**
     * Thrown when no credit slips are found when querying by specific date range
     */
    public const BY_DATE_RANGE = 1;
}
