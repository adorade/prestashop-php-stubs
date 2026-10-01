<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
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
