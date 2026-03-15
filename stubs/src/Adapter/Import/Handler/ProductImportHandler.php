<?php

namespace PrestaShop\PrestaShop\Adapter\Import\Handler;

/**
 * Class ProductImportHandler is responsible for product import.
 */
final class ProductImportHandler extends \PrestaShop\PrestaShop\Adapter\Import\Handler\AbstractImportHandler
{
    /**
     * @param ImportDataFormatter $dataFormatter
     * @param array $allShopIds
     * @param array $contextShopIds
     * @param int $currentContextShopId
     * @param bool $isMultistoreEnabled
     * @param int $contextLanguageId
     * @param TranslatorInterface $translator
     * @param LoggerInterface $logger
     * @param int $employeeId
     * @param Database $legacyDatabase
     * @param CacheClearerInterface $cacheClearer
     * @param Connection $connection
     * @param string $dbPrefix
     * @param Configuration $configuration
     * @param Address $shopAddress
     * @param Validate $validate
     * @param Tools $tools
     * @param ImageCopier $imageCopier
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
