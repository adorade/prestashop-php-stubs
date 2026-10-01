<?php

namespace PrestaShop\PrestaShop\Adapter\CartRule\QueryHandler;

/**
 * Handles command which gets catalog price rule for editing using legacy object model
 */
final class GetCartRuleForEditingHandler extends \PrestaShop\PrestaShop\Adapter\CartRule\AbstractCartRuleHandler implements \PrestaShop\PrestaShop\Core\Domain\CartRule\QueryHandler\GetCartRuleForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\CartRule\Query\GetCartRuleForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\CartRule\QueryResult\EditableCartRule
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\CartRule\Exception\CartRuleException
     * @throws \PrestaShop\PrestaShop\Core\Domain\CartRule\Exception\CartRuleNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CartRule\Query\GetCartRuleForEditing $query): \PrestaShop\PrestaShop\Core\Domain\CartRule\QueryResult\EditableCartRule
    {
    }
}
