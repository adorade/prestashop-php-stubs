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
/**
 * @since 1.5
 */
abstract class HTMLTemplateCore
{
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $date;
    /**
     * @var bool
     */
    public $available_in_your_account = \true;
    /**
     * @var Smarty
     */
    public $smarty;
    /**
     * @var Shop
     */
    public $shop;
    /**
     * Returns the template's HTML header.
     *
     * @return string HTML header
     */
    public function getHeader()
    {
    }
    /**
     * Returns the template's HTML footer.
     *
     * @return string HTML footer
     */
    public function getFooter()
    {
    }
    /**
     * Returns the shop address.
     *
     * @return string
     */
    protected function getShopAddress()
    {
    }
    /**
     * Returns the invoice logo.
     *
     * @return string|null
     */
    protected function getLogo()
    {
    }
    /**
     * Assign common header data to smarty variables.
     */
    public function assignCommonHeaderData()
    {
    }
    /**
     * Assign hook data.
     *
     * @param ObjectModel $object generally the object used in the constructor
     */
    public function assignHookData($object)
    {
    }
    /**
     * Returns the template's HTML content.
     *
     * @return string HTML content
     */
    abstract public function getContent();
    /**
     * Returns the template filename.
     *
     * @return string filename
     */
    abstract public function getFilename();
    /**
     * Returns the template filename when using bulk rendering.
     *
     * @return string filename
     */
    abstract public function getBulkFilename();
    /**
     * If the template is not present in the theme directory, it will return the default template
     * in _PS_PDF_DIR_ directory.
     *
     * @param string $template_name
     *
     * @return string
     */
    protected function getTemplate($template_name)
    {
    }
    /**
     * Translation method.
     *
     * @param string $string
     *
     * @return string translated text
     */
    protected static function l($string)
    {
    }
    protected function setShopId()
    {
    }
    /**
     * Returns the template's HTML pagination block.
     *
     * @return string HTML pagination block
     */
    public function getPagination()
    {
    }
}
