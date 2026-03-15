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
 * Class PageCore.
 */
class PageCore extends \ObjectModel
{
    public $id_page_type;
    public $id_object;
    public $name;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'page', 'primary' => 'id_page', 'fields' => ['id_page_type' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_object' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId']]];
    /**
     * @return int Current page ID
     */
    public static function getCurrentId()
    {
    }
    /**
     * Return page type ID from page name.
     *
     * @param string $name Page name (E.g. product.php)
     */
    public static function getPageTypeByName($name)
    {
    }
    /**
     * Increase page viewed number by one.
     *
     * @param int $idPage Page ID
     */
    public static function setPageViewed($idPage)
    {
    }
}
