<?php

namespace PrestaShop\PrestaShop\Adapter\TaxRulesGroup\QueryHandler;

/**
 * Handles query which gets paginated list of tax rules for a group
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetTaxRuleListHandler
{
    public function __construct(private readonly \Doctrine\DBAL\Connection $connection, private readonly string $dbPrefix)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Query\GetTaxRuleList $query): \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\QueryResult\TaxRuleList
    {
    }
}
