<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Query;

/**
 * Searchers for customers by phrases matching customer's first name, last name, email, company name and id
 */
class SearchCustomers
{
    /**
     * @param string[] $phrases
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint|null $shopConstraint
     * @param bool $excludeGuests
     */
    public function __construct(array $phrases, ?\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint = null, bool $excludeGuests = false)
    {
    }
    /**
     * @return string[]
     */
    public function getPhrases()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint|null
     */
    public function getShopConstraint(): ?\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
    /**
     * @return bool
     */
    public function getExcludeGuests(): bool
    {
    }
}
