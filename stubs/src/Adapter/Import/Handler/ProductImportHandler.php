<?php

namespace PrestaShop\PrestaShop\Adapter\Import\Handler;

/**
 * Class ProductImportHandler is responsible for product import.
 */
final class ProductImportHandler extends \PrestaShop\PrestaShop\Adapter\Import\Handler\AbstractImportHandler
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
     * @param \Doctrine\DBAL\Connection $connection
     * @param string $dbPrefix
     * @param \PrestaShop\PrestaShop\Adapter\Configuration $configuration
     * @param \Address $shopAddress
     * @param \PrestaShop\PrestaShop\Adapter\Validate $validate
     * @param \PrestaShop\PrestaShop\Adapter\Tools $tools
     * @param \PrestaShop\PrestaShop\Adapter\Import\ImageCopier $imageCopier
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Import\ImportDataFormatter $dataFormatter, array $allShopIds, array $contextShopIds, $currentContextShopId, $isMultistoreEnabled, $contextLanguageId, \Symfony\Contracts\Translation\TranslatorInterface $translator, \Psr\Log\LoggerInterface $logger, $employeeId, \PrestaShop\PrestaShop\Adapter\Database $legacyDatabase, \PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface $cacheClearer, \Doctrine\DBAL\Connection $connection, $dbPrefix, \PrestaShop\PrestaShop\Adapter\Configuration $configuration, \Address $shopAddress, \PrestaShop\PrestaShop\Adapter\Validate $validate, \PrestaShop\PrestaShop\Adapter\Tools $tools, \PrestaShop\PrestaShop\Adapter\Import\ImageCopier $imageCopier)
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
     * Legacy logic to create category.
     * This method is internally called by legacy Category::searchByPath(), so it has to be public.
     *
     * @param int $defaultLanguageId
     * @param string $categoryName
     * @param int|null $parentCategoryId
     */
    public function createCategory($defaultLanguageId, $categoryName, $parentCategoryId = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function supports($importEntityType)
    {
    }
}
