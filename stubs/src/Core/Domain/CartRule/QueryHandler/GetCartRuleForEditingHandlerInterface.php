<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\QueryHandler;

/**
 * Defines contract for GetCartRuleForEditingHandler
 */
interface GetCartRuleForEditingHandlerInterface
{
    /**
     * @param GetCartRuleForEditing $query
     *
     * @return EditableCartRule
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CartRule\Query\GetCartRuleForEditing $query): \PrestaShop\PrestaShop\Core\Domain\CartRule\QueryResult\EditableCartRule;
}
