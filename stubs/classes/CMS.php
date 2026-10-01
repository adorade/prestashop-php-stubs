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
 * Class CMSCore.
 */
class CMSCore extends \ObjectModel
{
    /** @var int|null */
    public $id;
    public $id_cms;
    public $head_seo_title;
    public $meta_title;
    public $meta_description;
    public $meta_keywords;
    public $content;
    public $link_rewrite;
    public $id_cms_category;
    public $position;
    public $indexation;
    public $active;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'cms', 'primary' => 'id_cms', 'multilang' => \true, 'multilang_shop' => \true, 'fields' => [
        'id_cms_category' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'],
        'position' => ['type' => self::TYPE_INT],
        'indexation' => ['type' => self::TYPE_BOOL],
        'active' => ['type' => self::TYPE_BOOL],
        /* Lang fields */
        'meta_description' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'size' => 512],
        'meta_keywords' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'size' => 255],
        'meta_title' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'required' => \true, 'size' => 255],
        'head_seo_title' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'size' => 255],
        'link_rewrite' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isLinkRewrite', 'required' => \true, 'size' => 128],
        'content' => ['type' => self::TYPE_HTML, 'lang' => \true, 'validate' => 'isCleanHtml', 'size' => 1073741823],
    ]];
    protected $webserviceParameters = ['objectNodeName' => 'content', 'objectsNodeName' => 'content_management_system'];
    /**
     * Adds current CMS as a new Object to the database.
     *
     * @param bool $autoDate Automatically set `date_upd` and `date_add` columns
     * @param bool $nullValues Whether we want to use NULL values instead of empty quotes values
     *
     * @return bool Indicates whether the CMS has been successfully added
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function add($autoDate = \true, $nullValues = \false)
    {
    }
    /**
     * Updates the current CMS in the database.
     *
     * @param bool $nullValues Whether we want to use NULL values instead of empty quotes values
     *
     * @return bool Indicates whether the CMS has been successfully updated
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function update($nullValues = \false)
    {
    }
    /**
     * Deletes current CMS from the database.
     *
     * @return bool True if delete was successful
     *
     * @throws PrestaShopException
     */
    public function delete()
    {
    }
    /**
     * Get links.
     *
     * @param int $idLang Language ID
     * @param array|null $selection
     * @param bool $active
     * @param Link|null $link
     *
     * @return array
     */
    public static function getLinks($idLang, $selection = \null, $active = \true, \Link $link = \null)
    {
    }
    /**
     * @param int|null $idLang
     * @param bool $idBlock
     * @param bool $active
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public static function listCms($idLang = \null, $idBlock = \false, $active = \true)
    {
    }
    /**
     * @param int|null $way
     * @param int|null $position
     *
     * @return bool
     */
    public function updatePosition($way, $position)
    {
    }
    /**
     * @param int $idCategory
     *
     * @return bool
     */
    public static function cleanPositions($idCategory)
    {
    }
    /**
     * @param int $idCategory
     *
     * @return false|string|null
     */
    public static function getLastPosition($idCategory)
    {
    }
    /**
     * @param int|null $idLang
     * @param int|null $idCmsCategory
     * @param bool $active
     * @param int|null $idShop
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public static function getCMSPages($idLang = \null, $idCmsCategory = \null, $active = \true, $idShop = \null)
    {
    }
    /**
     * @param int $idCms
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public static function getUrlRewriteInformations($idCms)
    {
    }
    /**
     * @param int $idCms
     * @param int|null $idLang
     * @param int|null $idShop
     *
     * @return array|bool|object|null
     */
    public static function getCMSContent($idCms, $idLang = \null, $idShop = \null)
    {
    }
    /**
     * Method required for new PrestaShop Core.
     *
     * @return string
     *
     * @since 1.7.0
     */
    public static function getRepositoryClassName()
    {
    }
}
