<?php

/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
class CmsControllerCore extends \FrontController
{
    public const CMS_CASE_PAGE = 1;
    public const CMS_CASE_CATEGORY = 2;
    /** @var string */
    public $php_self = 'cms';
    public $assignCase;
    /**
     * @deprecated Since 8.1, it will become protected in next major version. Use getCms() method instead.
     *
     * @var CMS|null
     */
    public $cms;
    /**
     * @deprecated Since 8.1, it will become protected in next major version. Use getCmsCategory() method instead.
     *
     * @var CMSCategory|null
     */
    public $cms_category;
    /** @var bool */
    public $ssl = \false;
    public function canonicalRedirection($canonicalURL = '')
    {
    }
    /**
     * Initialize cms controller.
     *
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
    public function initContent()
    {
    }
    /**
     * Return an array of IDs of CMS pages, which shouldn't be forwared to their canonical URLs in SSL environment.
     * Required for pages which are shown in iframes.
     */
    protected function getSSLCMSPageIds()
    {
    }
    public function getBreadcrumbLinks()
    {
    }
    public function getTemplateVarPage()
    {
    }
    public function getTemplateVarCategoryCms()
    {
    }
    /**
     * @return CMS|null
     */
    public function getCms()
    {
    }
    /**
     * @return CMSCategory|null
     */
    public function getCmsCategory()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getCanonicalURL()
    {
    }
}
