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
     * @param SearchCartRules $query
     *
     * @return FoundCartRule[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CartRule\Query\SearchCartRules $query): array
    {
    }
}
