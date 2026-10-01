<?php

namespace PrestaShop\PrestaShop\Core\Export\FileWriter;

/**
 * Class ExportCsvFileWriter writes provided data into CSV file and saves it in export directory.
 */
final class ExportCsvFileWriter implements \PrestaShop\PrestaShop\Core\Export\FileWriter\FileWriterInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Export\ExportDirectory $exportDirectory
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Export\ExportDirectory $exportDirectory)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Export\Exception\FileWritingException
     */
    public function write($fileName, \PrestaShop\PrestaShop\Core\Export\Data\ExportableDataInterface $data)
    {
    }
}
