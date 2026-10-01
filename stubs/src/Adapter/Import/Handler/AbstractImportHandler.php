<?php

namespace PrestaShop\PrestaShop\Adapter\Import\Handler;

/**
 * Class AbstractImportHandler is an abstract handler for import.
 */
abstract class AbstractImportHandler implements \PrestaShop\PrestaShop\Core\Import\Handler\ImportHandlerInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Import\ImportDataFormatter
     */
    protected $dataFormatter;
    /**
     * @var array
     */
    protected $contextShopIds;
    /**
     * @var bool whether the multistore feature is enabled
     */
    protected $isMultistoreEnabled;
    /**
     * @var int
     */
    protected $currentContextShopId;
    /**
     * @var \Symfony\Contracts\Translation\TranslatorInterface
     */
    protected $translator;
    /**
     * @var array all shops ids
     */
    protected $allShopIds;
    /**
     * @var string import type label
     */
    protected $importTypeLabel;
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Database
     */
    protected $legacyDatabase;
    /**
     * @var int
     */
    protected $languageId;
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Configuration
     */
    protected $configuration;
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Validate
     */
    protected $validate;
    /**
     * @var \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected $propertyAccessor;
    /**
     * @var int
     */
    protected $defaultLanguageId;
    /**
     * @var array entity default values
     */
    protected $defaultValues = [];
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Import\ImportDataFormatter $dataFormatter
     * @param array $allShopIds
     * @param array $contextShopIds
     * @param int $currentContextShopId
     * @param bool $isMultistoreEnabled
     * @param int $contextLanguageId
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param \Psr\Log\LoggerInterface $logger
     * @param int $employeeId
     * @param \PrestaShop\PrestaShop\Adapter\Database $legacyDatabase
     * @param \PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface $cacheClearer
     * @param \PrestaShop\PrestaShop\Adapter\Configuration $configuration
     * @param \PrestaShop\PrestaShop\Adapter\Validate $validate
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Import\ImportDataFormatter $dataFormatter, array $allShopIds, array $contextShopIds, $currentContextShopId, $isMultistoreEnabled, $contextLanguageId, \Symfony\Contracts\Translation\TranslatorInterface $translator, \Psr\Log\LoggerInterface $logger, $employeeId, \PrestaShop\PrestaShop\Adapter\Database $legacyDatabase, \PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface $cacheClearer, \PrestaShop\PrestaShop\Adapter\Configuration $configuration, \PrestaShop\PrestaShop\Adapter\Validate $validate)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setUp(\PrestaShop\PrestaShop\Core\Import\Configuration\ImportConfigInterface $importConfig, \PrestaShop\PrestaShop\Core\Import\Configuration\ImportRuntimeConfigInterface $runtimeConfig)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function importRow(\PrestaShop\PrestaShop\Core\Import\Configuration\ImportConfigInterface $importConfig, \PrestaShop\PrestaShop\Core\Import\Configuration\ImportRuntimeConfigInterface $runtimeConfig, \PrestaShop\PrestaShop\Core\Import\File\DataRow\DataRowInterface $dataRow)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function tearDown(\PrestaShop\PrestaShop\Core\Import\Configuration\ImportConfigInterface $importConfig, \PrestaShop\PrestaShop\Core\Import\Configuration\ImportRuntimeConfigInterface $runtimeConfig)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getWarnings()
    {
    }
    /**
     * Add a warning message.
     *
     * @param string $message
     */
    public function warning($message)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getErrors()
    {
    }
    /**
     * Add an error message.
     *
     * @param string $message
     */
    public function error($message)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getNotices()
    {
    }
    /**
     * Add a notice message.
     *
     * @param string $message
     */
    public function notice($message)
    {
    }
    /**
     * Fetch a data value by given entity field name out of data row.
     *
     * @param \PrestaShop\PrestaShop\Core\Import\File\DataRow\DataRowInterface $dataRow
     * @param array $entityFields required to find the data cell index in data row
     * @param string $entityFieldName
     *
     * @return string data value
     */
    protected function fetchDataValueByKey(\PrestaShop\PrestaShop\Core\Import\File\DataRow\DataRowInterface $dataRow, array $entityFields, $entityFieldName)
    {
    }
    /**
     * Set default values for entity.
     *
     * @param \ObjectModel $entity
     */
    protected function setDefaultValues(\ObjectModel $entity)
    {
    }
    /**
     * Fill entity data out of data row.
     *
     * @param \ObjectModel $entity
     * @param array $entityFields
     * @param \PrestaShop\PrestaShop\Core\Import\File\DataRow\DataRowInterface $dataRow
     * @param int $languageId
     */
    protected function fillEntityData(\ObjectModel $entity, array $entityFields, \PrestaShop\PrestaShop\Core\Import\File\DataRow\DataRowInterface $dataRow, $languageId)
    {
    }
    /**
     * Add a warning message with additional entity data.
     *
     * @param string $message
     * @param string $entityName
     * @param int|null $entityId
     */
    protected function addEntityWarning($message, $entityName, $entityId = null)
    {
    }
    /**
     * Checks if entity exists in the database.
     *
     * @param \ObjectModel $entity
     * @param string $table database table without prefix, e.g. "product".
     *
     * @return bool
     */
    protected function entityExists(\ObjectModel $entity, $table)
    {
    }
}
