<?php

/**
 * Class ProductDownloadCore.
 */
class ProductDownloadCore extends \ObjectModel
{
    /** @var int Product id which download belongs */
    public $id_product;
    /** @var string DisplayFilename the name which appear */
    public $display_filename;
    /** @var string PhysicallyFilename the name of the file on hard disk */
    public $filename;
    /** @var string DateDeposit when the file is upload */
    public $date_add;
    /** @var string DateExpiration deadline of the file */
    public $date_expiration;
    /** @var int NbDaysAccessible how many days the customer can access to file */
    public $nb_days_accessible;
    /** @var int NbDownloadable how many time the customer can download the file */
    public $nb_downloadable;
    /** @var bool Active if file is accessible or not */
    public $active = \true;
    /** @var bool is_shareable indicates whether the product can be shared */
    public $is_shareable = \false;
    protected static $_productIds = [];
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'product_download', 'primary' => 'id_product_download', 'fields' => ['id_product' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'display_filename' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'size' => \PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\VirtualProductFileSettings::MAX_DISPLAY_FILENAME_LENGTH], 'filename' => ['type' => self::TYPE_STRING, 'validate' => 'isSha1', 'size' => \PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\VirtualProductFileSettings::MAX_FILENAME_LENGTH], 'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'], 'date_expiration' => ['type' => self::TYPE_DATE, 'validate' => 'isDateOrNull'], 'nb_days_accessible' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'size' => 10], 'nb_downloadable' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'size' => 10], 'active' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'is_shareable' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool']]];
    /**
     * Build a virtual product.
     *
     * @param int $idProductDownload Existing productDownload id in order to load object (optional)
     */
    public function __construct($idProductDownload = \null)
    {
    }
    /**
     * @see ObjectModel::getFields()
     *
     * @return array
     */
    public function getFields()
    {
    }
    public function add($autoDate = \true, $nullValues = \false)
    {
    }
    public function update($nullValues = \false)
    {
    }
    public function delete($deleteFile = \false)
    {
    }
    /**
     * Delete the file.
     *
     * @param int $idProductDownload : if we need to delete a specific product attribute file
     *
     * @return bool
     */
    public function deleteFile($idProductDownload = \null)
    {
    }
    /**
     * Check if file exists.
     *
     * @return bool
     */
    public function checkFile()
    {
    }
    /**
     * Check if download repository is writable.
     *
     * @return bool
     */
    public static function checkWritableDir()
    {
    }
    /**
     * Return the id_product_download from an id_product.
     *
     * @param int $idProduct Product the id
     * @param bool $active
     *
     * @return bool|int Product the id for this virtual product
     */
    public static function getIdFromIdProduct($idProduct, $active = \true)
    {
    }
    /**
     * Return the display filename from a physical filename.
     *
     * @param string $filename Filename physically
     *
     * @return int Product the id for this virtual product
     *
     * @since 1.5.0.1
     */
    public static function getIdFromFilename($filename)
    {
    }
    /**
     * Return the filename from a Product ID.
     *
     * @param int $idProduct Product ID
     *
     * @return string Filename the filename for this virtual product
     */
    public static function getFilenameFromIdProduct($idProduct)
    {
    }
    /**
     * Return the display filename from a physical filename.
     *
     * @param string $filename Filename physically
     *
     * @return string Filename the display filename for this virtual product
     */
    public static function getFilenameFromFilename($filename)
    {
    }
    /**
     * Return text link.
     *
     * @param bool $admin specific to backend (optional)
     * @param string|false $hash hash code in table order detail (optional)
     *
     * @return string Html all the code for print a link to the file
     */
    public function getTextLink($admin = \true, $hash = \false)
    {
    }
    /**
     * Return html link.
     *
     * @param string|bool $class CSS selector
     * @param bool $admin specific to backend
     * @param string|bool $hash hash code in table order detail
     *
     * @return string Html all the code for print a link to the file
     */
    public function getHtmlLink($class = \false, $admin = \true, $hash = \false)
    {
    }
    /**
     * Return a deadline.
     *
     * @return string Datetime in SQL format
     */
    public function getDeadline()
    {
    }
    /**
     * Return a hash for control download access.
     *
     * @return string Hash ready to insert in database
     */
    public function getHash()
    {
    }
    /**
     * Return a sha1 filename.
     *
     * @return string Sha1 unique filename
     */
    public static function getNewFilename()
    {
    }
    /**
     * This method is allow to know if a feature is used or active.
     *
     * @return bool
     *
     * @since 1.5.0.1
     */
    public static function isFeatureActive()
    {
    }
}
