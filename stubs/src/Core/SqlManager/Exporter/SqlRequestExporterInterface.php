<?php

namespace PrestaShop\PrestaShop\Core\SqlManager\Exporter;

/**
 * Interface SqlRequestExporterInterface defines contract for SqlRequest exporter.
 */
interface SqlRequestExporterInterface
{
    /**
     * Export SqlRequest query execution result to file.
     *
     * @param SqlRequestId $sqlRequestId
     * @param SqlRequestExecutionResult $sqlRequestExecutionResult
     *
     * @return SplFileInfo
     */
    public function exportToFile(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\ValueObject\SqlRequestId $sqlRequestId, \PrestaShop\PrestaShop\Core\Domain\SqlManagement\SqlRequestExecutionResult $sqlRequestExecutionResult);
}
