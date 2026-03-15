<?php

namespace PrestaShop\PrestaShop\Core\Import;

/**
 * Class Importer is responsible for data import.
 */
final class Importer implements \PrestaShop\PrestaShop\Core\Import\ImporterInterface
{
    /**
     * @param ImportAccessCheckerInterface $accessChecker
     * @param ImportEntityDeleterInterface $entityDeleter
     * @param FileReaderInterface $fileReader
     * @param ImportDirectory $importDir
     * @param IniConfiguration $iniConfiguration
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Import\Access\ImportAccessCheckerInterface $accessChecker, \PrestaShop\PrestaShop\Core\Import\Entity\ImportEntityDeleterInterface $entityDeleter, \PrestaShop\PrestaShop\Core\Import\File\FileReaderInterface $fileReader, \PrestaShop\PrestaShop\Core\Import\ImportDirectory $importDir, \PrestaShop\PrestaShop\Core\Configuration\IniConfiguration $iniConfiguration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function import(\PrestaShop\PrestaShop\Core\Import\Configuration\ImportConfigInterface $importConfig, \PrestaShop\PrestaShop\Core\Import\Configuration\ImportRuntimeConfigInterface $runtimeConfig, \PrestaShop\PrestaShop\Core\Import\Handler\ImportHandlerInterface $importHandler)
    {
    }
    /**
     * Checks if data should be truncated.
     * Data should be truncated only when it's not validation step
     * and it's the first batch of the first process of the import.
     *
     * @param ImportConfigInterface $importConfig
     * @param ImportRuntimeConfigInterface $runtimeConfig
     *
     * @return bool
     */
    public function shouldTruncateData(\PrestaShop\PrestaShop\Core\Import\Configuration\ImportConfigInterface $importConfig, \PrestaShop\PrestaShop\Core\Import\Configuration\ImportRuntimeConfigInterface $runtimeConfig)
    {
    }
}
