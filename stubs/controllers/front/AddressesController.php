<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class AddressesControllerCore extends \FrontController
{
    /** @var bool */
    public $auth = \true;
    /** @var string */
    public $php_self = 'addresses';
    /** @var string */
    public $authRedirection = 'addresses';
    /** @var bool */
    public $ssl = \true;
    /**
     * Initialize addresses controller.
     *
     * @see FrontController::init()
     */
    public function init(): void
    {
    }
    /**
     * Assign template vars related to page content.
     *
     * @see FrontController::initContent()
     */
    public function initContent(): void
    {
    }
    public function getBreadcrumbLinks(): array
    {
    }
}
