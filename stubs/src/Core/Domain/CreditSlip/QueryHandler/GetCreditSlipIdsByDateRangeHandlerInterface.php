<?php

namespace PrestaShop\PrestaShop\Core\Domain\CreditSlip\QueryHandler;

/**
 * Interface for handling GetCreditSlipIdsByDateRange query
 */
interface GetCreditSlipIdsByDateRangeHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\CreditSlip\Query\GetCreditSlipIdsByDateRange $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\CreditSlip\ValueObject\CreditSlipId[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CreditSlip\Query\GetCreditSlipIdsByDateRange $query);
}
