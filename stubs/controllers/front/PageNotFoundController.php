<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class PageNotFoundControllerCore extends \FrontController
{
    /** @var string */
    public $php_self = 'pagenotfound';
    /** @var string */
    public $page_name = 'pagenotfound';
    /** @var bool */
    public $ssl = \true;
    /**
     * @see FrontController::init()
     */
    public function init()
    {
    }
    /**
     * Without an entry of its own the breadcrumb holds nothing but the home link, and a
     * one-level breadcrumb is what themes hide as empty. The wording matches the meta title
     * this page is registered with.
     */
    public function getBreadcrumbLinks(): array
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
    protected function canonicalRedirection(string $canonical_url = ''): void
    {
    }
    protected function sslRedirection(): void
    {
    }
    /**
     * Initializes a set of commonly used variables related to the current page, available for use
     * in the template. @see FrontController::assignGeneralPurposeVariables for more information.
     *
     * @return array
     */
    public function getTemplateVarPage(): array
    {
    }
    public function displayAjax(): void
    {
    }
}
