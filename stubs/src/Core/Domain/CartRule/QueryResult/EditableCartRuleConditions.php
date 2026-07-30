<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\QueryResult;

class EditableCartRuleConditions
{
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerIdInterface $customerId, ?\DateTime $dateFrom, ?\DateTime $dateTo, int $quantity, int $quantityPerUser, \PrestaShop\PrestaShop\Core\Domain\CartRule\QueryResult\EditableCartRuleMinimum $minimum, \PrestaShop\PrestaShop\Core\Domain\CartRule\QueryResult\EditableCartRuleRestrictions $restrictions)
    {
    }
    /**
     * @return CustomerIdInterface
     */
    public function getCustomerId(): \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerIdInterface
    {
    }
    /**
     * @return DateTime|null
     */
    public function getDateFrom(): ?\DateTime
    {
    }
    /**
     * @return DateTime|null
     */
    public function getDateTo(): ?\DateTime
    {
    }
    /**
     * @return int
     */
    public function getQuantity(): int
    {
    }
    /**
     * @return int
     */
    public function getQuantityPerUser(): int
    {
    }
    /**
     * @return EditableCartRuleMinimum
     */
    public function getMinimum(): \PrestaShop\PrestaShop\Core\Domain\CartRule\QueryResult\EditableCartRuleMinimum
    {
    }
    /**
     * @return EditableCartRuleRestrictions
     */
    public function getRestrictions(): \PrestaShop\PrestaShop\Core\Domain\CartRule\QueryResult\EditableCartRuleRestrictions
    {
    }
}
