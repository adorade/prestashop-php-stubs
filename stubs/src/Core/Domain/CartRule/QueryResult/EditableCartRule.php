<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\QueryResult;

/**
 * Provides data for editing CatalogPriceRule
 */
class EditableCartRule
{
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleId $cartRuleId, \PrestaShop\PrestaShop\Core\Domain\CartRule\QueryResult\EditableCartRuleInformation $information, \PrestaShop\PrestaShop\Core\Domain\CartRule\QueryResult\EditableCartRuleConditions $conditions, \PrestaShop\PrestaShop\Core\Domain\CartRule\QueryResult\EditableCartRuleActions $actions, ?\DateTime $dateAdd, ?\DateTime $dateUpd)
    {
    }
    /**
     * @return CartRuleId
     */
    public function getCartRuleId(): \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleId
    {
    }
    /**
     * @return EditableCartRuleInformation
     */
    public function getInformation(): \PrestaShop\PrestaShop\Core\Domain\CartRule\QueryResult\EditableCartRuleInformation
    {
    }
    /**
     * @return EditableCartRuleConditions
     */
    public function getConditions(): \PrestaShop\PrestaShop\Core\Domain\CartRule\QueryResult\EditableCartRuleConditions
    {
    }
    /**
     * @return EditableCartRuleActions
     */
    public function getActions(): \PrestaShop\PrestaShop\Core\Domain\CartRule\QueryResult\EditableCartRuleActions
    {
    }
    /**
     * @return DateTime|null
     */
    public function getDateAdd(): ?\DateTime
    {
    }
    /**
     * @return DateTime|null
     */
    public function getDateUpd(): ?\DateTime
    {
    }
}
