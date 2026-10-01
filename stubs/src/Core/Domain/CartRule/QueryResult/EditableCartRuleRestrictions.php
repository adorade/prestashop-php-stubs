<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\QueryResult;

class EditableCartRuleRestrictions
{
    public function __construct(bool $countryRestriction, bool $carrierRestriction, bool $groupRestriction, bool $cartRuleRestriction, bool $productRestriction, bool $shopRestriction)
    {
    }
    /**
     * @return bool
     */
    public function isCountryRestriction(): bool
    {
    }
    /**
     * @return bool
     */
    public function isCarrierRestriction(): bool
    {
    }
    /**
     * @return bool
     */
    public function isGroupRestriction(): bool
    {
    }
    /**
     * @return bool
     */
    public function isCartRuleRestriction(): bool
    {
    }
    /**
     * @return bool
     */
    public function isProductRestriction(): bool
    {
    }
    /**
     * @return bool
     */
    public function isShopRestriction(): bool
    {
    }
}
