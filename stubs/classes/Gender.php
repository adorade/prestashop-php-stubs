<?php

/**
 * Class GenderCore.
 */
class GenderCore extends \ObjectModel
{
    public const TYPE_MALE = \PrestaShop\PrestaShop\Core\Domain\Title\ValueObject\Gender::TYPE_MALE;
    public const TYPE_FEMALE = \PrestaShop\PrestaShop\Core\Domain\Title\ValueObject\Gender::TYPE_FEMALE;
    public const TYPE_OTHER = \PrestaShop\PrestaShop\Core\Domain\Title\ValueObject\Gender::TYPE_OTHER;
    /** @var int|null Object ID */
    public $id;
    public $id_gender;
    /** @var string|array<string> */
    public $name;
    /** @var int */
    public $type;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'gender', 'primary' => 'id_gender', 'multilang' => \true, 'fields' => [
        'type' => ['type' => self::TYPE_INT, 'required' => \true],
        /* Lang fields */
        'name' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isCatalogName', 'required' => \true, 'size' => 20],
    ]];
    /**
     * GenderCore constructor.
     *
     * @param int|null $id
     * @param int|null $idLang
     * @param int|null $idShop
     */
    public function __construct($id = \null, $idLang = \null, $idShop = \null)
    {
    }
    /**
     * Get all Genders.
     *
     * @param int|null $idLang Language ID
     *
     * @return PrestaShopCollection
     */
    public static function getGenders($idLang = \null)
    {
    }
    /**
     * Get Gender image.
     *
     * @return string File path
     */
    public function getImage()
    {
    }
}
