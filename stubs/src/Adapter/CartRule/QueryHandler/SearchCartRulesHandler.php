<?php

namespace PrestaShop\PrestaShop\Adapter\CartRule\QueryHandler;

/**
 * Searches for cart rules by search phrase using legacy object model
 */
final class SearchCartRulesHandler implements \PrestaShop\PrestaShop\Core\Domain\CartRule\QueryHandler\SearchCartRulesHandlerInterface
{
    /**
     * @param int $contextLangId
     */
    public function __construct(int $contextLangId)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\CartRule\Query\SearchCartRules $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\CartRule\QueryResult\FoundCartRule[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CartRule\Query\SearchCartRules $query): array
    {
    }
}
