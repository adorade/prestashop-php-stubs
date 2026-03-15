<?php

namespace PrestaShop\PrestaShop\Core\Domain\CreditSlip\QueryHandler;

/**
 * Interface for handling GetCreditSlipIdsByDateRange query
 */
interface GetCreditSlipIdsByDateRangeHandlerInterface
{
    /**
     * @param GetCreditSlipIdsByDateRange $query
     *
     * @return CreditSlipId[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CreditSlip\Query\GetCreditSlipIdsByDateRange $query);
}
