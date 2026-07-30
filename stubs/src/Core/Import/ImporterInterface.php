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
     * @param ImportConfigInterface $importConfig
     * @param ImportRuntimeConfigInterface $runtimeConfig
     * @param ImportHandlerInterface $importHandler
     */
    public function import(\PrestaShop\PrestaShop\Core\Import\Configuration\ImportConfigInterface $importConfig, \PrestaShop\PrestaShop\Core\Import\Configuration\ImportRuntimeConfigInterface $runtimeConfig, \PrestaShop\PrestaShop\Core\Import\Handler\ImportHandlerInterface $importHandler);
}
