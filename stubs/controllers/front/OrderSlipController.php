<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class OrderSlipControllerCore extends \FrontController
{
    /** @var bool */
    public $auth = \true;
    /** @var string */
    public $php_self = 'order-slip';
    /** @var string */
    public $authRedirection = 'order-slip';
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
    public function getTemplateVarCreditSlips(): array
    {
    }
    public function getBreadcrumbLinks(): array
    {
    }
}
