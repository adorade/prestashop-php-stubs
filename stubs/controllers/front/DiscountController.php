<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class DiscountControllerCore extends \FrontController
{
    /** @var bool */
    public $auth = \true;
    /** @var string */
    public $php_self = 'discount';
    /** @var string */
    public $authRedirection = 'discount';
    /** @var bool */
    public $ssl = \true;
    /**
     * Assign template vars related to page content.
     *
     * @see FrontController::initContent()
     */
    public function initContent(): void
    {
    }
    public function getTemplateVarCartRules(): array
    {
    }
    public function getBreadcrumbLinks(): array
    {
    }
    /**
     * @param array $voucher
     *
     * @return mixed
     */
    protected function getCombinableVoucherTranslation(array $voucher)
    {
    }
    /**
     * Formats a value of a voucher with fixed reduction
     *
     * @param bool $hasTaxIncluded
     * @param float $amount
     * @param int $currencyId
     *
     * @return string
     */
    protected function formatReductionAmount(bool $hasTaxIncluded, float $amount, int $currencyId)
    {
    }
    /**
     * Formats a value of a voucher with percentage reduction
     *
     * @param float $percentage
     *
     * @return string
     */
    protected function formatReductionInPercentage(float $percentage)
    {
    }
    /**
     * Formats all reductions and benefits of a voucher. (One voucher can provide a discount and gift at the same time.)
     *
     * @param array $voucher
     *
     * @return array
     */
    protected function accumulateCartRuleValue(array $voucher)
    {
    }
    /**
     * Prepares a single row of voucher table to show it to customer.
     *
     * @param array $voucher
     *
     * @return array
     */
    protected function buildCartRuleFromVoucher(array $voucher): array
    {
    }
}
