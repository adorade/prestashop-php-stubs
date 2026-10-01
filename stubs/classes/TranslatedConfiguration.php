<?php

/**
 * Class TranslatedConfigurationCore.
 */
class TranslatedConfigurationCore extends \Configuration
{
    /** @var array */
    protected $webserviceParameters = ['objectNodeName' => 'translated_configuration', 'objectsNodeName' => 'translated_configurations', 'fields' => ['value' => [], 'date_add' => [], 'date_upd' => []]];
    /** @var array */
    public static $definition = ['table' => 'configuration', 'primary' => 'id_configuration', 'multilang' => \true, 'fields' => ['name' => ['type' => self::TYPE_STRING, 'validate' => 'isConfigName', 'required' => \true, 'size' => 254], 'id_shop_group' => ['type' => self::TYPE_NOTHING, 'validate' => 'isUnsignedId'], 'id_shop' => ['type' => self::TYPE_NOTHING, 'validate' => 'isUnsignedId'], 'value' => ['type' => self::TYPE_STRING, 'lang' => \true, 'size' => \PrestaShopBundle\Form\Admin\Type\FormattedTextareaType::LIMIT_MEDIUMTEXT_UTF8_MB4], 'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'], 'date_upd' => ['type' => self::TYPE_DATE, 'validate' => 'isDate']]];
    /**
     * TranslatedConfigurationCore constructor.
     *
     * @param int|null $id
     * @param int|null $idLang
     */
    public function __construct($id = \null, $idLang = \null)
    {
    }
    /**
     * @param bool $autoDate
     * @param bool $nullValues
     *
     * @return bool
     */
    public function add($autoDate = \true, $nullValues = \false)
    {
    }
    /**
     * @param bool $nullValues
     *
     * @return bool
     */
    public function update($nullValues = \false)
    {
    }
    /**
     * @param string $sqlJoin
     * @param string $sqlFilter
     * @param string $sqlSort
     * @param string $sqlLimit
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public function getWebserviceObjectList($sqlJoin, $sqlFilter, $sqlSort, $sqlLimit)
    {
    }
}
