<?php

/**
 * This class is an extract of the ProductController->formatQuantityDiscounts() method
 * It is still legacy code and need some heavy refactoring.
 * This code has been extracted here for unit testing purpose
 *
 * @todo Refactor this class
 */
class SpecificPriceFormatterCore
{
    /**
     * SpecificPriceFormatter constructor.
     *
     * @param array $specificPrice
     * @param bool $isTaxIncluded
     * @param Currency $currency
     * @param bool $displayDiscountPrice
     */
    public function __construct(array $specificPrice, bool $isTaxIncluded, \Currency $currency, bool $displayDiscountPrice)
    {
    }
    /**
     * This is legacy code extracted from ProductController and it should be refactored
     *
     * @param float $initialPrice
     * @param float $tax_rate
     * @param float $ecotax_amount
     *
     * @return array
     */
    public function formatSpecificPrice($initialPrice, $tax_rate, $ecotax_amount)
    {
    }
}
