<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\QueryHandler;

/**
 * Defines contract for GetCartRuleForEditingHandler
 */
interface GetCartRuleForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\CartRule\Query\GetCartRuleForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\CartRule\QueryResult\EditableCartRule
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CartRule\Query\GetCartRuleForEditing $query): \PrestaShop\PrestaShop\Core\Domain\CartRule\QueryResult\EditableCartRule;
}
