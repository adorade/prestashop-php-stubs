<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * Class AliasCore.
 */
class AliasCore extends \ObjectModel
{
    public $alias;
    public $search;
    public $active = \true;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'alias', 'primary' => 'id_alias', 'fields' => ['search' => ['type' => self::TYPE_STRING, 'validate' => 'isValidSearch', 'required' => \true, 'size' => 255], 'alias' => ['type' => self::TYPE_STRING, 'validate' => 'isValidSearch', 'required' => \true, 'size' => 191], 'active' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool']]];
    /**
     * AliasCore constructor.
     *
     * @param int|null $id Alias ID
     * @param string|null $alias Alias
     * @param string|null $search Search string
     */
    public function __construct($id = \null, $alias = \null, $search = \null)
    {
    }
    /**
     * @see ObjectModel::add();
     */
    public function add($autoDate = \true, $nullValues = \false)
    {
    }
    /**
     * @see ObjectModel::delete();
     */
    public function delete()
    {
    }
    /**
     * Get all found aliases from DB with search query.
     *
     * @return string Comma separated aliases
     */
    public function getAliases()
    {
    }
    /**
     * This method is allowed to know if a feature is used or active.
     *
     * @return bool
     */
    public static function isFeatureActive()
    {
    }
    /**
     * This method is allowed to know if an alias exist for AdminImportController.
     *
     * @param int $idAlias Alias ID
     *
     * @return bool
     */
    public static function aliasExists($idAlias)
    {
    }
}
