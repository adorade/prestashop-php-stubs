<?php

namespace PrestaShop\PrestaShop\Core\Domain\CreditSlip\Query;

/**
 * Gets CreditSlipIds for provided date range
 */
final class GetCreditSlipIdsByDateRange
{
    /**
     * @param DateTime $dateTimeFrom
     * @param DateTime $dateTimeTo
     */
    public function __construct(\DateTime $dateTimeFrom, \DateTime $dateTimeTo)
    {
    }
    /**
     * @return DateTime
     */
    public function getDateTimeFrom()
    {
    }
    /**
     * @return DateTime
     */
    public function getDateTimeTo()
    {
    }
}
