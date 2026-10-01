<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
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
    public static function getLinks($idLang, $selection = \null, $active = \true, ?\Link $link = \null)
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
     * Returns the next position to use for a new CMS page.
     * CMS page positions start with 0.
     * Returns position of the last CMS page within that category + 1,
     * 0 if no CMS pages exist in the category.
     *
     * @param int $idCmsCategory ID of the CMS category the page will belong to
     *
     * @return int Position to use
     */
    public static function getLastPosition($idCmsCategory)
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
     */
    public static function getRepositoryClassName()
    {
    }
}
