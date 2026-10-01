<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class SitemapControllerCore extends \FrontController
{
    /** @var string */
    public $php_self = 'sitemap';
    /**
     * Assign template vars related to page content.
     *
     * @see FrontController::initContent()
     */
    public function initContent(): void
    {
    }
    public function getCategoriesLinks(): array
    {
    }
    /**
     * @return array
     */
    protected function getPagesLinks(): array
    {
    }
    /**
     * @return array
     */
    protected function getCmsTree($cms): array
    {
    }
    /**
     * @return array
     */
    protected function getUserAccountLinks(): array
    {
    }
    /**
     * @return array
     */
    protected function getOffersLinks(): array
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
