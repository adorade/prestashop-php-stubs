<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Query;

/**
 * Searchers for customers by phrases matching customer's first name, last name, email, company name and id
 */
class SearchCustomers
{
    /**
     * @param string[] $phrases
     */
    public function __construct(array $phrases, ?\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint = null)
    {
    }
    /**
     * @return string[]
     */
    public function getPhrases()
    {
    }
    /**
     * @return ShopConstraint|null
     */
    public function getShopConstraint(): ?\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
}
