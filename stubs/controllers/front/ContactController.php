<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class ContactControllerCore extends \FrontController
{
    /** @var string */
    public $php_self = 'contact';
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
    public function getBreadcrumbLinks(): array
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getCanonicalURL(): string
    {
    }
}
