<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\QueryHandler;

/**
 * Interface for handling SearchCartRules query
 */
interface SearchCartRulesHandlerInterface
{
    /**
     * @param SearchCartRules $query
     *
     * @return FoundCartRule[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CartRule\Query\SearchCartRules $query): array;
}
