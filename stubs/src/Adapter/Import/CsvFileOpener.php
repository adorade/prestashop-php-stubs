<?php

namespace PrestaShop\PrestaShop\Adapter\Import;

/**
 * Class CsvFileOpener is responsible for opening the CSV import file.
 */
final class CsvFileOpener implements \PrestaShop\PrestaShop\Core\Import\File\FileOpenerInterface
{
    /**
     * @param FileConverterInterface $excelToCsvConverter
     */
    public function __construct(\PrestaShop\PrestaShop\Core\File\Converter\FileConverterInterface $excelToCsvConverter)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function open(\SplFileInfo $file)
    {
    }
}
