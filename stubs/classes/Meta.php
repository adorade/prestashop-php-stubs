<?php

/**
 * Class MetaCore.
 */
class MetaCore extends \ObjectModel
{
    public $page;
    public $configurable = 1;
    public $title;
    public $description;
    public $keywords;
    public $url_rewrite;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'meta', 'primary' => 'id_meta', 'multilang' => \true, 'multilang_shop' => \true, 'fields' => [
        'page' => ['type' => self::TYPE_STRING, 'validate' => 'isFileName', 'required' => \true, 'size' => 64],
        'configurable' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'],
        /* Lang fields */
        'title' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'size' => 128],
        'description' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'size' => 255],
        'keywords' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'size' => 255],
        'url_rewrite' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isLinkRewrite', 'size' => 255],
    ]];
    /**
     * Get pages.
     *
     * @param bool $excludeFilled
     * @param bool|string $addPage
     *
     * @return array
     */
    public static function getPages($excludeFilled = \false, $addPage = \false)
    {
    }
    /**
     * Get all Metas.
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public static function getMetas()
    {
    }
    /**
     * Get all metas, but filter by Language.
     *
     * @param int $idLang Language ID
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public static function getMetasByIdLang($idLang)
    {
    }
    /**
     * Get metas by page.
     *
     * @param string $page
     * @param int $idLang Language ID
     *
     * @return array|bool|object|null
     */
    public static function getMetaByPage($page, $idLang)
    {
    }
    /**
     * Get all metas.
     *
     * @param int $idLang
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public static function getAllMeta($idLang)
    {
    }
    /**
     * Updates the current Meta in the database.
     *
     * @param bool $nullValues Whether we want to use NULL values instead of empty quotes values
     *
     * @return bool Indicates whether the Meta has been successfully updated
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function update($nullValues = \false)
    {
    }
    /**
     * Deletes current Meta from the database.
     *
     * @return bool `true` if delete was successful
     *
     * @throws PrestaShopException
     */
    public function delete()
    {
    }
    /**
     * Delete selection.
     *
     * @param array $selection
     *
     * @return bool
     */
    public function deleteSelection($selection)
    {
    }
    /**
     * Get equivalent URL rewrite.
     *
     * @param int $newIdLang
     * @param int $idLang
     * @param string $urlRewrite
     *
     * @return false|string|null
     */
    public static function getEquivalentUrlRewrite($newIdLang, $idLang, $urlRewrite)
    {
    }
    /**
     * Get meta tags.
     *
     * @since 1.5.0
     */
    public static function getMetaTags($idLang, $pageName, $title = '')
    {
    }
    /**
     * Get meta tags for a given page.
     *
     * @param int $idLang Language ID
     * @param string $pageName Page name
     *
     * @return array Meta tags
     *
     * @since 1.5.0
     */
    public static function getHomeMetas($idLang, $pageName)
    {
    }
    /**
     * Get product meta tags.
     *
     * @param int $idProduct
     * @param int $idLang
     * @param string $pageName
     *
     * @return array
     *
     * @since 1.5.0
     */
    public static function getProductMetas($idProduct, $idLang, $pageName)
    {
    }
    /**
     * Get category meta tags.
     *
     * @param int $idCategory
     * @param int $idLang
     * @param string $pageName
     *
     * @return array
     *
     * @since 1.5.0
     */
    public static function getCategoryMetas($idCategory, $idLang, $pageName, $title = '')
    {
    }
    /**
     * Get manufacturer meta tags.
     *
     * @param int $idManufacturer
     * @param int $idLang
     * @param string $pageName
     *
     * @return array
     *
     * @since 1.5.0
     */
    public static function getManufacturerMetas($idManufacturer, $idLang, $pageName)
    {
    }
    /**
     * Get supplier meta tags.
     *
     * @param int $idSupplier
     * @param int $idLang
     * @param string $pageName
     *
     * @return array
     *
     * @since 1.5.0
     */
    public static function getSupplierMetas($idSupplier, $idLang, $pageName)
    {
    }
    /**
     * Get CMS meta tags.
     *
     * @param int $idCms
     * @param int $idLang
     * @param string $pageName
     *
     * @return array
     *
     * @since 1.5.0
     */
    public static function getCmsMetas($idCms, $idLang, $pageName)
    {
    }
    /**
     * Get CMS category meta tags.
     *
     * @param int $idCmsCategory
     * @param int $idLang
     * @param string $pageName
     *
     * @return array
     *
     * @since 1.5.0
     */
    public static function getCmsCategoryMetas($idCmsCategory, $idLang, $pageName)
    {
    }
    /**
     * @since 1.5.0
     */
    public static function completeMetaTags($metaTags, $defaultValue, \Context $context = \null)
    {
    }
    /**
     * Add page number to title
     *
     * @param string $title
     *
     * @return string
     */
    public static function paginateTitle(string $title): string
    {
    }
    /**
     * Get presented version of an object.
     *
     * @param ObjectModel $object
     *
     * @return array
     */
    protected static function getPresentedObject($object)
    {
    }
}
