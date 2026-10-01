<?php

class CmsControllerCore extends \FrontController
{
    public const CMS_CASE_PAGE = 1;
    public const CMS_CASE_CATEGORY = 2;
    /** @var string */
    public $php_self = 'cms';
    public $assignCase;
    /**
     * @var CMS|null
     */
    protected $cms;
    /**
     * @var CMSCategory|null
     */
    protected $cms_category;
    /** @var bool */
    public $ssl = \false;
    public function canonicalRedirection(string $canonicalURL = ''): void
    {
    }
    /**
     * Initialize cms controller.
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
    /**
     * Return an array of IDs of CMS pages, which shouldn't be forwared to their canonical URLs in SSL environment.
     * Required for pages which are shown in iframes.
     */
    protected function getSSLCMSPageIds(): array
    {
    }
    public function getBreadcrumbLinks(): array
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
    public function getTemplateVarCategoryCms(): array
    {
    }
    /**
     * @return CMS|null
     */
    public function getCms(): ?\CMS
    {
    }
    /**
     * @return CMSCategory|null
     */
    public function getCmsCategory(): ?\CMSCategory
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getCanonicalURL(): string
    {
    }
}
