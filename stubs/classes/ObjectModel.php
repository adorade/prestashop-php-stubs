<?php

abstract class ObjectModelCore implements \PrestaShop\PrestaShop\Core\Foundation\Database\EntityInterface
{
    /**
     * List of field types.
     */
    public const TYPE_INT = 1;
    public const TYPE_BOOL = 2;
    public const TYPE_STRING = 3;
    public const TYPE_FLOAT = 4;
    public const TYPE_DATE = 5;
    public const TYPE_HTML = 6;
    public const TYPE_NOTHING = 7;
    public const TYPE_SQL = 8;
    /**
     * List of data to format.
     */
    public const FORMAT_COMMON = 1;
    public const FORMAT_LANG = 2;
    public const FORMAT_SHOP = 3;
    /**
     * List of association types.
     */
    public const HAS_ONE = 1;
    public const HAS_MANY = 2;
    /** @var int|null Object ID */
    public $id;
    /** @var int|null Language ID */
    protected $id_lang = \null;
    /** @var Language|null Language ID
     * This is the same Language as the $id_lang except in the following case:
     * If $id_lang is invalid (e.g. due to a removed language) $lang_associated is the default language
     */
    protected $lang_associated = \null;
    /** @var int|null Shop ID */
    protected $id_shop = \null;
    /**
     * This field contains the list of shop that you intend to update. When add or update is called the ObjectModel
     * uses the IDs from the Context by default, except when this field is not empty. In this case the shop IDs
     * contained in this field override the ones from the Context allowing you to control exactly which shops are
     * impacted.
     *
     * @var array List of shop IDs
     */
    public $id_shop_list = [];
    /** @var bool */
    protected $get_shop_from_context = \true;
    /** @var array|null Holds required fields for each ObjectModel class */
    protected static $fieldsRequiredDatabase = \null;
    /**
     * @deprecated 1.5.0.1 Define property using $definition['table'] property instead.
     *
     * @var string
     */
    protected $table;
    /**
     * @deprecated 1.5.0.1 Define property using $definition['table'] property instead.
     *
     * @var string
     */
    protected $identifier;
    /**
     * @deprecated 1.5.0.1 Define property using $definition['table'] property instead.
     *
     * @var array
     */
    protected $fieldsRequired = [];
    /**
     * @deprecated 1.5.0.1 Define property using $definition['table'] property instead.
     *
     * @var array
     */
    protected $fieldsSize = [];
    /**
     * @deprecated 1.5.0.1 Define property using $definition['table'] property instead.
     *
     * @var array
     */
    protected $fieldsValidate = [];
    /**
     * @deprecated 1.5.0.1 Define property using $definition['table'] property instead.
     *
     * @var array
     */
    protected $fieldsRequiredLang = [];
    /**
     * @deprecated 1.5.0.1 Define property using $definition['table'] property instead.
     *
     * @var array
     */
    protected $fieldsSizeLang = [];
    /**
     * @deprecated 1.5.0.1 Define property using $definition['table'] property instead.
     *
     * @var array
     */
    protected $fieldsValidateLang = [];
    /**
     * @deprecated 1.5.0.1
     *
     * @var array
     */
    protected $tables = [];
    /** @var array Tables */
    protected $webserviceParameters = [];
    /** @var string Path to image directory. Used for image deletion. */
    protected $image_dir = \null;
    /** @var string file type of image files. */
    protected $image_format = 'jpg';
    /** @var TranslatorComponent */
    protected $translator;
    /**
     * @var array Contains object definition
     *
     * @since 1.5.0.1
     */
    public static $definition = [];
    /**
     * Holds compiled definitions of each ObjectModel class.
     * Values are assigned during object initialization.
     *
     * @var array
     */
    protected static $loaded_classes = [];
    /** @var array Contains current object definition. */
    protected $def;
    /** @var array|null List of specific fields to update (all fields if null). */
    protected $update_fields = \null;
    /** @var Db|bool An instance of the db in order to avoid calling Db::getInstance() thousands of times. */
    protected static $db = \false;
    /** @var array|null List of HTML field (based on self::TYPE_HTML) */
    public static $htmlFields = \null;
    /** @var bool Enables to define an ID before adding object. */
    public $force_id = \false;
    /**
     * @var bool if true, objects are cached in memory
     */
    protected static $cache_objects = \true;
    /**
     * @return null
     */
    public static function getRepositoryClassName()
    {
    }
    /**
     * reset static cache (eg unit testing purpose).
     */
    public static function resetStaticCache()
    {
    }
    /**
     * Returns object validation rules (fields validity).
     *
     * @param string $class Child class name for static use (optional)
     *
     * @return array Validation rules (fields validity)
     */
    public static function getValidationRules($class = __CLASS__)
    {
    }
    /**
     * Builds the object.
     *
     * @param int|null $id if specified, loads and existing object from DB (optional)
     * @param int|null $id_lang required if object is multilingual (optional)
     * @param int|null $id_shop ID shop for objects with multishop tables
     * @param TranslatorComponent|null $translator
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function __construct($id = \null, $id_lang = \null, $id_shop = \null, $translator = \null)
    {
    }
    protected function trans($id, array $parameters = [], $domain = \null, $locale = \null)
    {
    }
    /**
     * Prepare fields for ObjectModel class (add, update)
     * All fields are verified (pSQL, intval, ...).
     *
     * @return array All object fields
     *
     * @throws PrestaShopException
     */
    public function getFields()
    {
    }
    /**
     * Prepare fields for multishop
     * Fields are not validated here, we consider they are already validated in getFields() method,
     * this is not the best solution but this is the only one possible for retro compatibility.
     *
     * @since 1.5.0.1
     *
     * @return array All object fields
     */
    public function getFieldsShop()
    {
    }
    /**
     * Prepare multilang fields.
     *
     * @since 1.5.0.1
     *
     * @return array
     *
     * @throws PrestaShopException
     */
    public function getFieldsLang()
    {
    }
    /**
     * Returns the language related to the object or the default one if it doesn't exists
     *
     * @return Language
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function getAssociatedLanguage(): \Language
    {
    }
    /**
     * Formats values of each fields.
     *
     * @since 1.5.0.1
     *
     * @param int $type FORMAT_COMMON or FORMAT_LANG or FORMAT_SHOP
     * @param int $id_lang If this parameter is given, only take lang fields
     *
     * @return array
     */
    protected function formatFields($type, $id_lang = \null)
    {
    }
    /**
     * Formats a value.
     *
     * @param mixed $value
     * @param int $type
     * @param bool $with_quotes
     * @param bool $purify
     * @param bool $allow_null
     *
     * @return mixed
     */
    public static function formatValue($value, $type, $with_quotes = \false, $purify = \true, $allow_null = \false)
    {
    }
    /**
     * Get object name
     * Used for read/write in required fields table.
     *
     * @return string
     */
    public function getObjectName()
    {
    }
    /**
     * Saves current object to database (add or update).
     *
     * @param bool $null_values
     * @param bool $auto_date
     *
     * @return bool Insertion result
     *
     * @throws PrestaShopException
     */
    public function save($null_values = \false, $auto_date = \true)
    {
    }
    /**
     * Adds current object to the database.
     *
     * @param bool $auto_date
     * @param bool $null_values
     *
     * @return bool Insertion result
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function add($auto_date = \true, $null_values = \false)
    {
    }
    /**
     * Takes current object ID, gets its values from database,
     * saves them in a new row and loads newly saved values as a new object.
     *
     * @return ObjectModel|false
     *
     * @throws PrestaShopDatabaseException
     */
    public function duplicateObject()
    {
    }
    /**
     * Updates the current object in the database.
     *
     * @param bool $null_values
     *
     * @return bool
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function update($null_values = \false)
    {
    }
    /**
     * Deletes current object from database.
     *
     * @return bool True if delete was successful
     *
     * @throws PrestaShopException
     */
    public function delete()
    {
    }
    /**
     * Deletes multiple objects from the database at once.
     *
     * @param array $ids array of objects IDs
     *
     * @return bool
     */
    public function deleteSelection($ids)
    {
    }
    /**
     * Does a soft delete on current object, using the "deleted" field in DB
     * If the model object has no "deleted" property or no "deleted" definition field it will throw an exception
     *
     * @return bool
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function softDelete()
    {
    }
    /**
     * Toggles object status in database.
     *
     * @return bool Update result
     *
     * @throws PrestaShopException
     */
    public function toggleStatus()
    {
    }
    /**
     * @deprecated 1.5.0.1 (use getFieldsLang())
     *
     * @param array $fields_array
     *
     * @return array
     *
     * @throws PrestaShopException
     */
    protected function getTranslationsFields($fields_array)
    {
    }
    /**
     * @deprecated 1.5.0.1
     *
     * @param array $fields
     * @param array $fields_array
     * @param int $id_language
     *
     * @throws PrestaShopException
     */
    protected function makeTranslationFields(&$fields, &$fields_array, $id_language)
    {
    }
    /**
     * Checks if object field values are valid before database interaction.
     *
     * @param bool $die
     * @param bool $error_return
     *
     * @return bool|string true, false or error message
     *
     * @throws PrestaShopException
     */
    public function validateFields($die = \true, $error_return = \false)
    {
    }
    /**
     * Checks if multilingual object field values are valid before database interaction.
     *
     * @param bool $die
     * @param bool $errorReturn
     *
     * @return bool|string true, false or error message
     *
     * @throws PrestaShopException
     */
    public function validateFieldsLang($die = \true, $errorReturn = \false)
    {
    }
    /**
     * Validate a single field.
     *
     * @since 1.5.0.1
     *
     * @param string $field Field name
     * @param mixed $value Field value
     * @param int|null $id_lang Language ID
     * @param array $skip array of fields to skip
     * @param bool $human_errors if true, uses more descriptive, translatable error strings
     *
     * @return bool|string true or error message string
     *
     * @throws PrestaShopException
     */
    public function validateField($field, $value, $id_lang = \null, $skip = [], $human_errors = \false)
    {
    }
    /**
     * Returns field name translation.
     *
     * @param string $field Field name
     * @param string $class ObjectModel class name
     * @param bool $htmlentities If true, applies htmlentities() to result string
     * @param Context|null $context Context object
     *
     * @return string
     */
    public static function displayFieldName($field, $class = __CLASS__, $htmlentities = \true, \Context $context = \null)
    {
    }
    /**
     * Validates submitted values and returns an array of errors, if any.
     *
     * @param bool $htmlentities if true, uses htmlentities() for field name translations in errors
     *
     * @return array
     */
    public function validateController($htmlentities = \true)
    {
    }
    /**
     * Returns webservice parameters of this object.
     *
     * @param string|null $ws_params_attribute_name
     *
     * @return array
     */
    public function getWebserviceParameters($ws_params_attribute_name = \null)
    {
    }
    /**
     * Returns webservice object list.
     *
     * @param string $sql_join
     * @param string $sql_filter
     * @param string $sql_sort
     * @param string $sql_limit
     *
     * @return array|null
     *
     * @throws PrestaShopDatabaseException
     */
    public function getWebserviceObjectList($sql_join, $sql_filter, $sql_sort, $sql_limit)
    {
    }
    /**
     * Validate required fields.
     *
     * @param bool $htmlentities
     *
     * @return array
     *
     * @throws PrestaShopException
     */
    public function validateFieldsRequiredDatabase($htmlentities = \true)
    {
    }
    /**
     * Returns an array of required fields.
     *
     * @param bool $all if true, returns required fields of all object classes
     *
     * @return array|null
     *
     * @throws PrestaShopDatabaseException
     */
    public function getFieldsRequiredDatabase($all = \false)
    {
    }
    /**
     * Returns true if required field exists.
     *
     * @param string $field_name to search
     * @param bool $all if true, returns required fields of all object classes
     *
     * @return bool
     */
    public function isFieldRequired($field_name, $all = \false)
    {
    }
    /**
     * Caches data about required objects fields in memory.
     *
     * @param bool $all if true, caches required fields of all object classes
     */
    public function cacheFieldsRequiredDatabase($all = \true)
    {
    }
    /**
     * Get required fields list for this model or for all the models.
     *
     * @param bool $all : whether it should return required fields for this model or all the models
     *
     * @return array
     */
    public function getCachedFieldsRequiredDatabase($all = \false)
    {
    }
    /**
     * Sets required field for this class in the database.
     *
     * @param array $fields
     *
     * @return bool
     *
     * @throws PrestaShopDatabaseException
     */
    public function addFieldsRequiredDatabase($fields)
    {
    }
    /**
     * Clears cache entries that have this object's ID.
     *
     * @param bool $all If true, clears cache for all objects
     */
    public function clearCache($all = \false)
    {
    }
    /**
     * Checks if current object is associated to a shop.
     *
     * @since 1.5.0.1
     *
     * @param int|null $id_shop
     *
     * @return bool
     */
    public function isAssociatedToShop($id_shop = \null)
    {
    }
    /**
     * This function associate an item to its context.
     *
     * @param int|array $id_shops
     *
     * @return bool|void
     *
     * @throws PrestaShopDatabaseException
     */
    public function associateTo($id_shops)
    {
    }
    /**
     * Gets the list of associated shop IDs.
     *
     * @since 1.5.0.1
     *
     * @return array<int, int>
     *
     * @throws PrestaShopDatabaseException
     */
    public function getAssociatedShops()
    {
    }
    /**
     * Copies shop association data from object with specified ID.
     *
     * @since 1.5.0.1
     *
     * @param int $id
     *
     * @return bool|void
     *
     * @throws PrestaShopDatabaseException
     */
    public function duplicateShops($id)
    {
    }
    /**
     * Checks if there is more than one entry in associated shop table for current object.
     *
     * @since 1.5.0.1
     *
     * @return bool
     */
    public function hasMultishopEntries()
    {
    }
    /**
     * Checks if object is multi-shop object.
     *
     * @return bool
     */
    public function isMultishop()
    {
    }
    /**
     * Checks if a field is a multi-shop field.
     *
     * @param string $field
     *
     * @return bool
     */
    public function isMultiShopField($field)
    {
    }
    /**
     * Checks if the object is both multi-language and multi-shop.
     *
     * @return bool
     */
    public function isLangMultishop()
    {
    }
    /**
     * Updates a table and splits the common datas and the shop datas.
     *
     * @since 1.5.0.1
     *
     * @param string $classname
     * @param array $data
     * @param string $where
     *
     * @return bool
     */
    public static function updateMultishopTable($classname, $data, $where = '')
    {
    }
    /**
     * Returns the shop ID used to fetch initial object data.
     *
     * @return int
     */
    public function getShopId(): int
    {
    }
    /**
     * Delete images associated with the object.
     *
     * @param bool $force_delete
     *
     * @return bool
     */
    public function deleteImage($force_delete = \false)
    {
    }
    /**
     * Checks if an object exists in database.
     *
     * @param int $id_entity
     * @param string $table Deprecated since 1.7.8.x
     *
     * @return bool
     */
    public static function existsInDatabase($id_entity, $table = \null)
    {
    }
    /**
     * Checks if an object type exists in the database.
     *
     * @since 1.5.0.1
     *
     * @param string|null $table Name of table linked to entity
     * @param bool $has_active_column True if the table has an active column
     *
     * @return bool
     */
    public static function isCurrentlyUsed($table = \null, $has_active_column = \false)
    {
    }
    /**
     * Fill an object with given data. Data must be an array with this syntax:
     * array(objProperty => value, objProperty2 => value, etc.).
     *
     * @since 1.5.0.1
     *
     * @param array $data
     * @param int|null $id_lang
     */
    public function hydrate(array $data, $id_lang = \null)
    {
    }
    /**
     * Fill (hydrate) a list of objects in order to get a collection of these objects.
     *
     * @since 1.5.0.1
     *
     * @param string $class Class of objects to hydrate
     * @param array $datas List of data (multi-dimensional array)
     * @param int|null $id_lang
     *
     * @return array
     *
     * @throws PrestaShopException
     */
    public static function hydrateCollection($class, array $datas, $id_lang = \null)
    {
    }
    /**
     * Returns object definition.
     *
     * @param string|object $class Name of object
     * @param string|null $field Name of field if we want the definition of one field only
     *
     * @return array
     */
    public static function getDefinition($class, $field = \null)
    {
    }
    /**
     * Retrocompatibility for classes without $definition static.
     *
     * @TODO Remove this in 1.6 !
     *
     * @since 1.5.0.1
     */
    protected function setDefinitionRetrocompatibility()
    {
    }
    /**
     * Return the field value for the specified language if the field is multilang,
     * else the field value.
     *
     * @since 1.5.0.1
     *
     * @param string $field_name
     * @param int|null $id_lang
     *
     * @return mixed
     *
     * @throws PrestaShopException
     */
    public function getFieldByLang($field_name, $id_lang = \null)
    {
    }
    /**
     * Set a list of specific fields to update
     * array(field1 => true, field2 => false,
     * langfield1 => array(1 => true, 2 => false)).
     *
     * @since 1.5.0.1
     *
     * @param array<string, bool|array<int, bool>>|null $fields
     */
    public function setFieldsToUpdate(?array $fields)
    {
    }
    /**
     * @return array<string, bool|array<int, bool>>|null
     */
    public function getFieldsToUpdate(): ?array
    {
    }
    /**
     * Enables object caching.
     */
    public static function enableCache()
    {
    }
    /**
     * Disables object caching.
     */
    public static function disableCache()
    {
    }
    /**
     * Return HtmlFields for object.
     */
    public function getHtmlFields()
    {
    }
    /**
     * @return int[]
     */
    protected function getShopIdsList(): array
    {
    }
}
