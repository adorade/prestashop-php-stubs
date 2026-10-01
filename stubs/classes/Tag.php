<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * Class TagCore.
 */
class TagCore extends \ObjectModel
{
    /** @var int Language id */
    public $id_lang;
    /** @var string Name */
    public $name;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'tag', 'primary' => 'id_tag', 'fields' => ['id_lang' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'name' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => \true, 'size' => 32]]];
    protected $webserviceParameters = ['fields' => ['id_lang' => ['xlink_resource' => 'languages']]];
    public function __construct($id = \null, $name = \null, $idLang = \null)
    {
    }
    public function add($autoDate = \true, $nullValues = \false)
    {
    }
    /**
     * @return bool
     */
    public function delete()
    {
    }
    /**
     * Add several tags in database and link it to a product.
     *
     * @param int $idLang Language id
     * @param int $idProduct Product id to link tags with
     * @param string|array $tagList List of tags, as array or as a string with comas
     *
     * @return bool Operation success
     */
    public static function addTags($idLang, $idProduct, $tagList, $separator = ',')
    {
    }
    /**
     * Update tag count.
     *
     * @param array|null $tagList
     */
    public static function updateTagCount($tagList = \null)
    {
    }
    /**
     * Get main tags.
     *
     * @param int $idLang Language ID
     * @param int $nb number
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public static function getMainTags($idLang, $nb = 10)
    {
    }
    /**
     * Get Product Tags.
     *
     * @param int $idProduct Product ID
     *
     * @return array|bool
     */
    public static function getProductTags($idProduct)
    {
    }
    /**
     * Get Products.
     *
     * @param bool $associated
     * @param Context|null $context
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public function getProducts($associated = \true, ?\Context $context = \null)
    {
    }
    /**
     * Set products.
     *
     * @param array $array
     *
     * @return bool
     */
    public function setProducts($array)
    {
    }
    /**
     * Delete tags for product.
     *
     * @param int $idProduct Product ID
     *
     * @return bool
     *
     * @throws PrestaShopDatabaseException
     */
    public static function deleteTagsForProduct($idProduct)
    {
    }
    /**
     * Delete tags for product in specific language
     *
     * @param int $productId
     * @param int $langId
     *
     * @return bool
     */
    public static function deleteProductTagsInLang(int $productId, int $langId)
    {
    }
}
