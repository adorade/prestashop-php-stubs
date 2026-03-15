<?php

namespace PrestaShop\PrestaShop\Adapter\CartRule\QueryHandler;

/**
 * Handles command which gets catalog price rule for editing using legacy object model
 */
final class GetCartRuleForEditingHandler extends \PrestaShop\PrestaShop\Adapter\CartRule\AbstractCartRuleHandler implements \PrestaShop\PrestaShop\Core\Domain\CartRule\QueryHandler\GetCartRuleForEditingHandlerInterface
{
    /**
     * @param GetCartRuleForEditing $query
     *
     * @return EditableCartRule
     *
     * @throws CartRuleException
     * @throws CartRuleNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CartRule\Query\GetCartRuleForEditing $query): \PrestaShop\PrestaShop\Core\Domain\CartRule\QueryResult\EditableCartRule
    {
    }
}
