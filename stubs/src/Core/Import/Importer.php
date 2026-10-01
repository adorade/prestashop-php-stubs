<?php

namespace PrestaShop\PrestaShop\Core\Import;

/**
 * Class Importer is responsible for data import.
 */
final class Importer implements \PrestaShop\PrestaShop\Core\Import\ImporterInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Import\Access\ImportAccessCheckerInterface $accessChecker
     * @param \PrestaShop\PrestaShop\Core\Import\Entity\ImportEntityDeleterInterface $entityDeleter
     * @param \PrestaShop\PrestaShop\Core\Import\File\FileReaderInterface $fileReader
     * @param ImportDirectory $importDir
     * @param \PrestaShop\PrestaShop\Core\Configuration\IniConfiguration $iniConfiguration
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
     * @param \PrestaShop\PrestaShop\Core\Import\Configuration\ImportConfigInterface $importConfig
     * @param \PrestaShop\PrestaShop\Core\Import\Configuration\ImportRuntimeConfigInterface $runtimeConfig
     *
     * @return bool
     */
    public function shouldTruncateData(\PrestaShop\PrestaShop\Core\Import\Configuration\ImportConfigInterface $importConfig, \PrestaShop\PrestaShop\Core\Import\Configuration\ImportRuntimeConfigInterface $runtimeConfig)
    {
    }
}
