<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class IdentityControllerCore extends \FrontController
{
    /** @var bool */
    public $auth = \true;
    /** @var string */
    public $php_self = 'identity';
    /** @var string */
    public $authRedirection = 'identity';
    /** @var bool */
    public $ssl = \true;
    public $passwordRequired = \true;
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
