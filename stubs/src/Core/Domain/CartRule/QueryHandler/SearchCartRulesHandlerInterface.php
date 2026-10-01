<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\QueryHandler;

/**
 * Interface for handling SearchCartRules query
 */
interface SearchCartRulesHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\CartRule\Query\SearchCartRules $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\CartRule\QueryResult\FoundCartRule[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CartRule\Query\SearchCartRules $query): array;
}
