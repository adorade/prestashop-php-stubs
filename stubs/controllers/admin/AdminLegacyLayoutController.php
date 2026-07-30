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
class AdminLegacyLayoutControllerCore extends \AdminController
{
    /** @var string */
    public $outPutHtml = '';
    /** @var string[] */
    public $jsRouterMetadata;
    /** @var array */
    protected $headerToolbarBtn = [];
    /** @var string */
    protected $title;
    /** @var bool */
    protected $showContentHeader = \true;
    /** @var string */
    protected $headerTabContent = '';
    /**
     * See the $helpLink phpDoc below
     *
     * @var bool
     */
    protected $enableSidebar = \false;
    /**
     * The Help Link is used for the 'Help' button in the top right of Back Office pages
     *
     * If $enableSidebar is true, the 'Help' button will download the content available at $helpLink
     * and inject it into the sidebar window
     *
     * If $enableSidebar is false, the 'Help' button is a link that redirects to $helpLink
     *
     * @var string|bool
     */
    protected $helpLink;
    /** @var bool */
    protected $useRegularH1Structure;
    /** @var bool */
    protected $lockedToAllShopContext = \false;
    /**
     * @param string $controllerName
     * @param string $title
     * @param array $headerToolbarBtn
     * @param string $displayType
     * @param bool $showContentHeader
     * @param string $headerTabContent
     * @param bool $enableSidebar
     * @param string $helpLink
     * @param string[] $jsRouterMetadata array to provide base_url and security token for JS Router
     * @param string $metaTitle
     * @param bool $useRegularH1Structure allows complex <h1> structure if set to false
     */
    public function __construct($controllerName = '', $title = '', $headerToolbarBtn = [], $displayType = '', $showContentHeader = \true, $headerTabContent = '', $enableSidebar = \false, $helpLink = '', $jsRouterMetadata = [], $metaTitle = '', $useRegularH1Structure = \true)
    {
    }
    /**
     * This helps avoiding handling legacy processes when in Symfony Controllers.
     * Otherwise when using POST action to render form you sometimes get an exception.
     */
    public function initProcess()
    {
    }
    /**
     * @param bool $isNewTheme
     */
    public function setMedia($isNewTheme = \false)
    {
    }
    /**
     * @param bool $disable
     *
     * @return bool
     */
    public function viewAccess($disable = \false)
    {
    }
    /**
     * Always return true, cause of legacy redirect in layout
     *
     * @return bool
     */
    public function checkAccess()
    {
    }
    protected function addHeaderToolbarBtn()
    {
    }
    public function initContent()
    {
    }
    public function initToolbarTitle()
    {
    }
    public function initPageHeaderToolbar()
    {
    }
    public function display()
    {
    }
}
