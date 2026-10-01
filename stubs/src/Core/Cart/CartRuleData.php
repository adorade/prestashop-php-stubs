<?php

namespace PrestaShop\PrestaShop\Core\Cart;

class CartRuleData
{
    protected $ruleData = [];
    /**
     * @var AmountImmutable
     */
    protected $discountApplied;
    public function __construct($rowData)
    {
    }
    /**
     * @param array $ruleData
     *
     * @return static
     */
    public function setRuleData($ruleData)
    {
    }
    /**
     * @return array
     */
    public function getRuleData()
    {
    }
    /**
     * @return \CartRule
     */
    public function getCartRule()
    {
    }
    public function addDiscountApplied(\PrestaShop\PrestaShop\Core\Cart\AmountImmutable $amount)
    {
    }
    /**
     * @return AmountImmutable
     */
    public function getDiscountApplied()
    {
    }
}
