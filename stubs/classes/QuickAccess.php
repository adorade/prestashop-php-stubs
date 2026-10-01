<?php

/**
 * Class QuickAccessCore.
 */
class QuickAccessCore extends \ObjectModel
{
    /** @var string Name */
    public $name;
    /** @var string Link */
    public $link;
    /** @var bool New windows or not */
    public $new_window;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'quick_access', 'primary' => 'id_quick_access', 'multilang' => \true, 'fields' => [
        'link' => ['type' => self::TYPE_STRING, 'validate' => 'isUrl', 'required' => \true, 'size' => 255],
        'new_window' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => \true],
        /* Lang fields */
        'name' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isCleanHtml', 'required' => \true, 'size' => 32],
    ]];
    /**
     * Get all available quick_accesses.
     *
     * @return array QuickAccesses
     */
    public static function getQuickAccesses($idLang)
    {
    }
    /**
     * Get all available quick_accesses with token.
     *
     * @return bool|array QuickAccesses
     */
    public static function getQuickAccessesWithToken($idLang, $idEmployee)
    {
    }
    /**
     * Toggle new window.
     *
     * @return bool
     *
     * @throws PrestaShopException
     */
    public function toggleNewWindow()
    {
    }
}
