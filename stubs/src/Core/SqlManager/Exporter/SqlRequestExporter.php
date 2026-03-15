<?php

namespace PrestaShop\PrestaShop\Core\SqlManager\Exporter;

/**
 * Class SqlRequestExporter exports SqlRequest query execution result into CSV file under export directory.
 */
final class SqlRequestExporter implements \PrestaShop\PrestaShop\Core\SqlManager\Exporter\SqlRequestExporterInterface
{
    /**
     * @param FileWriterInterface $csvFileWriter
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Export\FileWriter\FileWriterInterface $csvFileWriter)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function exportToFile(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\ValueObject\SqlRequestId $sqlRequestId, \PrestaShop\PrestaShop\Core\Domain\SqlManagement\SqlRequestExecutionResult $result)
    {
    }
}
