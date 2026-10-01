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
