<?php

class WebserviceKeyCore extends \ObjectModel
{
    /** @var string Key */
    public $key;
    /** @var bool Webservice Account status */
    public $active = \true;
    /** @var string Webservice Account description */
    public $description;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'webservice_account', 'primary' => 'id_webservice_account', 'fields' => ['active' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'key' => ['type' => self::TYPE_STRING, 'required' => \true, 'size' => 32], 'description' => ['type' => self::TYPE_STRING, 'size' => \PrestaShopBundle\Form\Admin\Type\FormattedTextareaType::LIMIT_MEDIUMTEXT_UTF8_MB4]]];
    public function add($autodate = \true, $nullValues = \false)
    {
    }
    public static function keyExists($key)
    {
    }
    public function delete()
    {
    }
    public function deleteAssociations()
    {
    }
    /**
     * @param string $auth_key
     */
    public static function getPermissionForAccount($auth_key)
    {
    }
    /**
     * @param string $auth_key
     */
    public static function isKeyActive($auth_key)
    {
    }
    /**
     * @param string $auth_key
     */
    public static function getClassFromKey($auth_key)
    {
    }
    /**
     * @param string $auth_key
     *
     * @return int
     */
    public static function getIdFromKey(string $auth_key)
    {
    }
    /**
     * @param int $id_account
     * @param array $permissions_to_set
     *
     * @return bool
     */
    public static function setPermissionForAccount($id_account, $permissions_to_set)
    {
    }
}
