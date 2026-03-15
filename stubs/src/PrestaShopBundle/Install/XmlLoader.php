<?php

namespace PrestaShopBundle\Install;

class XmlLoader
{
    /**
     * @var LanguageList
     */
    protected $language;
    /**
     * @var \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected $translator;
    /**
     * @var array List of languages stored as array(id_lang => iso)
     */
    protected $languages = [];
    /**
     * @var array List of errors
     */
    protected $errors = [];
    protected $data_path;
    protected $lang_path;
    protected $img_path;
    public $path_type;
    protected $ids = [];
    protected $primaries = [];
    protected $delayed_inserts = [];
    public function __construct()
    {
    }
    /**
     * Set list of installed languages.
     *
     * @param array $languages array(id_lang => iso)
     */
    public function setLanguages(array $languages)
    {
    }
    public function setTranslator($translator)
    {
    }
    public function setDefaultPath()
    {
    }
    public function setFixturesPath($path = null)
    {
    }
    /**
     * Get list of errors.
     *
     * @return array
     */
    public function getErrors()
    {
    }
    /**
     * Add an error.
     *
     * @param string $error
     */
    public function setError($error)
    {
    }
    /**
     * Store an ID related to an entity and its identifier (E.g. we want to save that product with ID "ipod_nano" has the ID 1).
     *
     * @param string $entity
     * @param string $identifier
     * @param int $id
     */
    public function storeId($entity, $identifier, $id)
    {
    }
    /**
     * Retrieve an ID related to an entity and its identifier.
     *
     * @param string $entity
     * @param string $identifier
     */
    public function retrieveId($entity, $identifier)
    {
    }
    public function getIds()
    {
    }
    public function setIds($ids)
    {
    }
    /**
     * @return string[] Entity names
     *
     * @throws PrestashopInstallerException
     */
    public function getSortedEntities()
    {
    }
    /**
     * Read all XML files from data folder and populate tables.
     *
     * @throws PrestashopInstallerException
     */
    public function populateFromXmlFiles()
    {
    }
    /**
     * Populate an entity.
     *
     * @param string $entity Entity name to populate
     *
     * @throws PrestashopInstallerException
     */
    public function populateEntity($entity)
    {
    }
    protected function getFallBackToDefaultLanguage($iso)
    {
    }
    protected function getFallBackToDefaultEntityLanguage($iso, $entity)
    {
    }
    /**
     * Special case for "country" entity.
     */
    public function populateEntityCountry()
    {
    }
    /**
     * Special case for "tag" entity.
     */
    public function populateEntityTag()
    {
    }
    /**
     * Check fields related to an other entity, and replace their values by the ID created by the other entity.
     *
     * @param string $entity
     * @param array $data
     */
    protected function rewriteRelationedData($entity, array $data)
    {
    }
    public function flushDelayedInserts()
    {
    }
    /**
     * Create a simple entity with all its data and lang data
     * If a methode createEntity$entity exists, use it. Else if $classname is given, use it. Else do a simple insert in database.
     *
     * @param string $entity
     * @param string $identifier
     * @param string $classname
     * @param array $data
     * @param array $data_lang
     */
    public function createEntity($entity, $identifier, $classname, array $data, array $data_lang = [])
    {
    }
    public function createEntityAttribute($identifier, array $data, array $data_lang = [])
    {
    }
    public function createEntityConfiguration($identifier, array $data, array $data_lang)
    {
    }
    /**
     * @param string $identifier
     * @param array $data
     * @param array $data_lang
     *
     * @return $this
     *
     * @throws PrestaShopDatabaseException
     */
    public function createEntityPack($identifier, array $data, array $data_lang)
    {
    }
    public function createEntityStockAvailable($identifier, array $data, array $data_lang)
    {
    }
    /**
     * Called from self::populateEntity
     *
     * @param string $identifier Tab id
     * @param array $data Attributes + children of tab element
     * @param array $data_lang Translated attributes
     *
     * @throws PrestashopInstallerException
     */
    public function createEntityTab($identifier, array $data, array $data_lang)
    {
    }
    public function generatePrimary($entity, $primary)
    {
    }
    public function copyImages($entity, $identifier, $path, array $data, $extension = 'jpg')
    {
    }
    public function copyImagesOrderState($identifier, array $data)
    {
    }
    public function copyImagesTab($identifier, array $data)
    {
    }
    public function copyImagesImage($identifier)
    {
    }
    public function getTables()
    {
    }
    public function hasElements($table)
    {
    }
    public function getColumns($table, $multilang = false, array $exclude = [])
    {
    }
    public function getClasses($path = null)
    {
    }
    public function checkIfTypeIsText($type)
    {
    }
    public function isMultilang($entity)
    {
    }
    public function entityExists($entity)
    {
    }
    public function getEntitiesList()
    {
    }
    public function getEntityInfo($entity)
    {
    }
    public function getDependencies()
    {
    }
    public function generateEntitySchema($entity, array $fields, array $config)
    {
    }
    /**
     * ONLY FOR DEVELOPMENT PURPOSE.
     */
    public function generateAllEntityFiles()
    {
    }
    /**
     * ONLY FOR DEVELOPMENT PURPOSE.
     */
    public function generateEntityFiles($entities)
    {
    }
    public function generateEntityContent($entity)
    {
    }
    /**
     * ONLY FOR DEVELOPMENT PURPOSE.
     */
    public function getEntityContents($entity)
    {
    }
    public function getEntityContentsTag()
    {
    }
    /**
     * ONLY FOR DEVELOPMENT PURPOSE.
     */
    public function generateId($entity, $primary, array $row = [], $id_format = null)
    {
    }
    /**
     * ONLY FOR DEVELOPMENT PURPOSE.
     */
    public function createXmlEntityNodes($entity, array $nodes, \SimpleXMLElement $entities)
    {
    }
    /**
     * ONLY FOR DEVELOPMENT PURPOSE.
     */
    public function backupImage($entity, $path)
    {
    }
    /**
     * ONLY FOR DEVELOPMENT PURPOSE.
     */
    public function backupImageImage()
    {
    }
    /**
     * ONLY FOR DEVELOPMENT PURPOSE.
     */
    public function backupImageTab()
    {
    }
}
