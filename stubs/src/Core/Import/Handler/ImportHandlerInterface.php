<?php

namespace PrestaShop\PrestaShop\Core\Import\Handler;

/**
 * Interface ImportHandlerInterface describes an import handler.
 */
interface ImportHandlerInterface
{
    /**
     * Executed before import process is started.
     *
     * @param ImportConfigInterface $importConfig
     * @param ImportRuntimeConfigInterface $runtimeConfig
     */
    public function setUp(\PrestaShop\PrestaShop\Core\Import\Configuration\ImportConfigInterface $importConfig, \PrestaShop\PrestaShop\Core\Import\Configuration\ImportRuntimeConfigInterface $runtimeConfig);
    /**
     * Imports one data row.
     *
     * @param ImportConfigInterface $importConfig
     * @param ImportRuntimeConfigInterface $runtimeConfig
     * @param DataRowInterface $dataRow
     *
     * @throws EmptyDataRowException
     * @throws SkippedIterationException
     */
    public function importRow(\PrestaShop\PrestaShop\Core\Import\Configuration\ImportConfigInterface $importConfig, \PrestaShop\PrestaShop\Core\Import\Configuration\ImportRuntimeConfigInterface $runtimeConfig, \PrestaShop\PrestaShop\Core\Import\File\DataRow\DataRowInterface $dataRow);
    /**
     * Executed when the import process is completed.
     *
     * @param ImportConfigInterface $importConfig
     * @param ImportRuntimeConfigInterface $runtimeConfig
     */
    public function tearDown(\PrestaShop\PrestaShop\Core\Import\Configuration\ImportConfigInterface $importConfig, \PrestaShop\PrestaShop\Core\Import\Configuration\ImportRuntimeConfigInterface $runtimeConfig);
    /**
     * Get warning messages that occurred during import.
     *
     * @return array
     */
    public function getWarnings();
    /**
     * Get error messages that occurred during import.
     *
     * @return array
     */
    public function getErrors();
    /**
     * Get notice messages that occurred during import.
     *
     * @return array
     */
    public function getNotices();
    /**
     * Check whether this import handler supports given entity type.
     *
     * @param int $importEntityType
     *
     * @return bool
     */
    public function supports($importEntityType);
}
