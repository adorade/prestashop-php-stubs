<?php

namespace PrestaShop\PrestaShop\Adapter\Import\Handler;

/**
 * Class CategoryImportHandler holds legacy logic of category import.
 */
final class CategoryImportHandler extends \PrestaShop\PrestaShop\Adapter\Import\Handler\AbstractImportHandler
{
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
     * @param \PrestaShop\PrestaShop\Adapter\Import\ImageCopier $imageCopier
     * @param \PrestaShop\PrestaShop\Adapter\Tools $tools
     * @param \Doctrine\DBAL\Connection $connection
     * @param string $dbPrefix
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Import\ImportDataFormatter $dataFormatter, array $allShopIds, array $contextShopIds, $currentContextShopId, $isMultistoreEnabled, $contextLanguageId, \Symfony\Contracts\Translation\TranslatorInterface $translator, \Psr\Log\LoggerInterface $logger, $employeeId, \PrestaShop\PrestaShop\Adapter\Database $legacyDatabase, \PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface $cacheClearer, \PrestaShop\PrestaShop\Adapter\Configuration $configuration, \PrestaShop\PrestaShop\Adapter\Validate $validate, \PrestaShop\PrestaShop\Adapter\Import\ImageCopier $imageCopier, \PrestaShop\PrestaShop\Adapter\Tools $tools, \Doctrine\DBAL\Connection $connection, $dbPrefix)
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
    public function supports($importEntityType)
    {
    }
}
