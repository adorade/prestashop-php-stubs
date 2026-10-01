<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * Class ProfileCore.
 */
class ProfileCore extends \ObjectModel
{
    public const ALLOWED_PROFILE_TYPE_CHECK = ['id_tab', 'class_name'];
    /** @var string|array<int, string> Name */
    public $name;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'profile', 'primary' => 'id_profile', 'multilang' => \true, 'fields' => [
        /* Lang fields */
        'name' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'required' => \true, 'size' => 128],
    ]];
    protected static $_cache_accesses = [];
    /**
     * {@inheritdoc}
     */
    public function __construct($id = \null, $idLang = \null, $idShop = \null, $translator = \null)
    {
    }
    /**
     * @return string|null
     */
    public function getProfileImage(): ?string
    {
    }
    /**
     * Get all available profiles.
     *
     * @return array Profiles
     */
    public static function getProfiles($idLang)
    {
    }
    /**
     * Get the current profile name.
     *
     * @param int $idProfile Profile ID
     * @param int|null $idLang Language ID
     *
     * @return array Profile
     */
    public static function getProfile($idProfile, $idLang = \null)
    {
    }
    public function add($autodate = \true, $null_values = \false)
    {
    }
    public function delete()
    {
    }
    /**
     * Get access profile.
     *
     * @param int $idProfile Profile ID
     * @param int $idTab Tab ID
     *
     * @return array|bool
     */
    public static function getProfileAccess($idProfile, $idTab)
    {
    }
    /**
     * Get access profiles.
     *
     * @param int $idProfile Profile ID
     * @param string $type Type
     *
     * @return array|false
     */
    public static function getProfileAccesses($idProfile, $type = 'id_tab')
    {
    }
    public static function resetStaticCache()
    {
    }
    public static function resetCacheAccesses()
    {
    }
}
