<?php

namespace PrestaShop\PrestaShop\Adapter\CreditSlip\QueryHandler;

/**
 * Handles query which gets CreditSlipIds by provided date range
 */
final class GetCreditSlipIdsByDateRangeHandler implements \PrestaShop\PrestaShop\Core\Domain\CreditSlip\QueryHandler\GetCreditSlipIdsByDateRangeHandlerInterface
{
    /**
     * Handles the query using legacy object model
     *
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CreditSlip\Query\GetCreditSlipIdsByDateRange $query)
    {
    }
}
