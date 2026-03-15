<?php

namespace PrestaShop\PrestaShop\Core\Cart;

/**
 * provide objects dealing with tax ex/in-cluded amounts
 * aims to avoid using multiple values into calculation processes.
 *
 * this class is IMMUTABLE
 */
class AmountImmutable
{
    /**
     * @var float
     */
    protected $taxIncluded = 0.0;
    /**
     * @var float
     */
    protected $taxExcluded = 0.0;
    public function __construct($taxIncluded = 0.0, $taxExcluded = 0.0)
    {
    }
    /**
     * @return float
     */
    public function getTaxIncluded()
    {
    }
    /**
     * @param float $taxIncluded
     *
     * @return AmountImmutable
     */
    protected function setTaxIncluded($taxIncluded)
    {
    }
    /**
     * @return float
     */
    public function getTaxExcluded()
    {
    }
    /**
     * @param float $taxExcluded
     *
     * @return AmountImmutable
     */
    protected function setTaxExcluded($taxExcluded)
    {
    }
    /**
     * Sums another amount object.
     *
     * @param AmountImmutable $amount
     *
     * @return AmountImmutable
     */
    public function add(\PrestaShop\PrestaShop\Core\Cart\AmountImmutable $amount)
    {
    }
    /**
     * Substract another amount object.
     *
     * @param AmountImmutable $amount
     *
     * @return AmountImmutable
     */
    public function sub(\PrestaShop\PrestaShop\Core\Cart\AmountImmutable $amount)
    {
    }
}
