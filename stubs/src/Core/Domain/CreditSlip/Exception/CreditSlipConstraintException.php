<?php

namespace PrestaShop\PrestaShop\Core\Domain\CreditSlip\Exception;

/**
 * Is thrown when credit slip constraints are violated
 */
class CreditSlipConstraintException extends \PrestaShop\PrestaShop\Core\Domain\CreditSlip\Exception\CreditSlipException
{
    /**
     * When id value is not valid
     */
    public const INVALID_ID = 10;
}
