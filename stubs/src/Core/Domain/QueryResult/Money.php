<?php

namespace PrestaShop\PrestaShop\Core\Domain\QueryResult;

/**
 * This generic query result is used to represent an amount of money for query results.
 */
class Money
{
    public function __construct(private readonly \PrestaShop\Decimal\DecimalNumber $amount, private readonly int $currencyId, private readonly bool $taxIncluded)
    {
    }
    public function getAmount(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    public function getCurrencyId(): int
    {
    }
    public function isTaxIncluded(): bool
    {
    }
}
