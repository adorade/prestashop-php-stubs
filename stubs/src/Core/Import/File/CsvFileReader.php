<?php

namespace PrestaShop\PrestaShop\Core\Import\File;

/**
 * Class CsvFileReader defines a CSV file reader.
 */
final class CsvFileReader implements \PrestaShop\PrestaShop\Core\Import\File\FileReaderInterface
{
    /**
     * @param FileOpenerInterface $fileOpener
     * @param string $delimiter
     * @param int $length
     * @param string $enclosure
     * @param string $escape
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Import\File\FileOpenerInterface $fileOpener, $delimiter = ';', $length = 0, $enclosure = '"', $escape = '\\')
    {
    }
    /**
     * {@inheritdoc}
     */
    public function read(\SplFileInfo $file)
    {
    }
}
