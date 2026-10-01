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
     * @param \PrestaShop\PrestaShop\Core\Import\Configuration\ImportConfigInterface $importConfig
     * @param \PrestaShop\PrestaShop\Core\Import\Configuration\ImportRuntimeConfigInterface $runtimeConfig
     */
    public function setUp(\PrestaShop\PrestaShop\Core\Import\Configuration\ImportConfigInterface $importConfig, \PrestaShop\PrestaShop\Core\Import\Configuration\ImportRuntimeConfigInterface $runtimeConfig);
    /**
     * Imports one data row.
     *
     * @param \PrestaShop\PrestaShop\Core\Import\Configuration\ImportConfigInterface $importConfig
     * @param \PrestaShop\PrestaShop\Core\Import\Configuration\ImportRuntimeConfigInterface $runtimeConfig
     * @param \PrestaShop\PrestaShop\Core\Import\File\DataRow\DataRowInterface $dataRow
     *
     * @throws \PrestaShop\PrestaShop\Core\Import\Exception\EmptyDataRowException
     * @throws \PrestaShop\PrestaShop\Core\Import\Exception\SkippedIterationException
     */
    public function importRow(\PrestaShop\PrestaShop\Core\Import\Configuration\ImportConfigInterface $importConfig, \PrestaShop\PrestaShop\Core\Import\Configuration\ImportRuntimeConfigInterface $runtimeConfig, \PrestaShop\PrestaShop\Core\Import\File\DataRow\DataRowInterface $dataRow);
    /**
     * Executed when the import process is completed.
     *
     * @param \PrestaShop\PrestaShop\Core\Import\Configuration\ImportConfigInterface $importConfig
     * @param \PrestaShop\PrestaShop\Core\Import\Configuration\ImportRuntimeConfigInterface $runtimeConfig
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
