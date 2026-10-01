<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class AddressControllerCore extends \FrontController
{
    /** @var bool */
    public $auth = \true;
    /** @var bool */
    public $guestAllowed = \true;
    /** @var string */
    public $php_self = 'address';
    /** @var string */
    public $authRedirection = 'addresses';
    /** @var bool */
    public $ssl = \true;
    protected $address_form;
    protected $should_redirect = \false;
    /**
     * Initialize address controller.
     *
     * @see FrontController::init()
     */
    public function init(): void
    {
    }
    /**
     * Start forms process.
     *
     * @see FrontController::postProcess()
     */
    public function postProcess(): void
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
    public function displayAjaxAddressForm(): void
    {
    }
}
