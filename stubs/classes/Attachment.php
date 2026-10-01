<?php

/**
 * Class AttachmentCore.
 */
class AttachmentCore extends \ObjectModel
{
    public $file;
    public $file_name;
    public $file_size;
    public $name;
    public $mime;
    public $description;
    /** @var int position Position */
    public $position;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'attachment', 'primary' => 'id_attachment', 'multilang' => \true, 'fields' => [
        'file' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => \true, 'size' => 40],
        'mime' => ['type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'required' => \true, 'size' => 128],
        'file_name' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'size' => 255],
        'file_size' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'],
        /* Lang fields */
        'name' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'required' => \true, 'size' => 255],
        'description' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isCleanHtml', 'size' => \PrestaShopBundle\Form\Admin\Type\FormattedTextareaType::LIMIT_MEDIUMTEXT_UTF8_MB4],
    ], 'associations' => ['products' => ['type' => self::HAS_MANY, 'field' => 'id_product', 'object' => 'Product', 'association' => 'product_attachment']]];
    protected $webserviceParameters = ['objectNodeNames' => 'attachments', 'hidden_fields' => [], 'fields' => ['file' => [], 'file_name' => [], 'file_size' => [], 'mime' => []], 'associations' => ['products' => ['resource' => 'product', 'api' => 'products', 'fields' => ['id' => ['required' => \true]]]]];
    /**
     * @see ObjectModel::add()
     */
    public function add($autoDate = \true, $nullValues = \false)
    {
    }
    /**
     * @see ObjectModel::update()
     */
    public function update($nullValues = \false)
    {
    }
    /**
     * @see ObjectModel::delete()
     */
    public function delete()
    {
    }
    /**
     * Delete selection of attachments.
     *
     * @param array $attachments Attachments
     *
     * @return bool|int Whether the selection has been successfully deleted
     *
     * @todo: Find out if $return can be initialized with true. (breaking change)
     */
    public function deleteSelection(array $attachments)
    {
    }
    /**
     * Get attachments.
     *
     * @param int $idLang Language ID
     * @param int $idProduct Product ID
     * @param bool $include Whether the attachments are included or excluded from the Product ID
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null Database query result
     */
    public static function getAttachments($idLang, $idProduct, $include = \true)
    {
    }
    /**
     * Unassociate all products from the current object
     *
     * @param bool $updateAttachmentCache [default=true] If set to false attachment cache will not be updated
     *
     * @return bool Deletion result
     */
    public function deleteAttachments(bool $updateAttachmentCache = \true): bool
    {
    }
    /**
     * Delete Product attachments for the given Product ID.
     *
     * @param int $idProduct Product ID
     *
     * @return bool
     */
    public static function deleteProductAttachments($idProduct)
    {
    }
    /**
     * Associate $id_product to the current object.
     *
     * @param int $idProduct id of the product to associate
     *
     * @return bool true if success
     */
    public function attachProduct($idProduct)
    {
    }
    /**
     * @param int $productId
     * @param int $attachmentId
     *
     * @return bool true if success
     */
    public static function associateProductAttachment(int $productId, int $attachmentId): bool
    {
    }
    /**
     * Associate an array of id_attachment $array to the product $id_product
     * and remove eventual previous association.
     *
     * @param int $idProduct Product ID
     * @param mixed $array Attachment IDs
     *
     * @return bool Whether the attachments have been successfully associated with the Product
     */
    public static function attachToProduct($idProduct, $array)
    {
    }
    /**
     * Get Attachment IDs for the given Product within the given range of attachment IDs.
     *
     * @param int $idLang Language ID
     * @param array $list List of attachment IDs in which to search
     *
     * @return array|bool List of attachment IDs found. False if nothing found.
     */
    public static function getProductAttached($idLang, $list)
    {
    }
    /**
     * Get attachment products ids of current attachment for association.
     *
     * @return array<int, array{ id: string }> An array of product ids
     */
    public function getWsProducts(): array
    {
    }
    /**
     * Set products ids of current attachment for association.
     *
     * @param array<int, array{id: int|string }> $products Products ids
     *
     * @return bool
     */
    public function setWsProducts(array $products): bool
    {
    }
}
