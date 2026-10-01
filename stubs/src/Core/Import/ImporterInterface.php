<?php

namespace PrestaShop\PrestaShop\Core\Import;

/**
 * Interface ImporterInterface describes an import processing unit.
 */
interface ImporterInterface
{
    /**
     * Process the import.
     *
     * @param \PrestaShop\PrestaShop\Core\Import\Configuration\ImportConfigInterface $importConfig
     * @param \PrestaShop\PrestaShop\Core\Import\Configuration\ImportRuntimeConfigInterface $runtimeConfig
     * @param \PrestaShop\PrestaShop\Core\Import\Handler\ImportHandlerInterface $importHandler
     */
    public function import(\PrestaShop\PrestaShop\Core\Import\Configuration\ImportConfigInterface $importConfig, \PrestaShop\PrestaShop\Core\Import\Configuration\ImportRuntimeConfigInterface $runtimeConfig, \PrestaShop\PrestaShop\Core\Import\Handler\ImportHandlerInterface $importHandler);
}
