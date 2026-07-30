<?php

namespace PrestaShop\PrestaShop\Adapter\Converter;

/**
 * Class ExcelToCsvFileConverter converts excel files to CSV.
 */
final class ExcelToCsvFileConverter implements \PrestaShop\PrestaShop\Core\File\Converter\FileConverterInterface
{
    /**
     * @param Filesystem $filesystem
     * @param string $excelDirectory path to excel files directory
     */
    public function __construct(\Symfony\Component\Filesystem\Filesystem $filesystem, $excelDirectory)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function convert(\SplFileInfo $sourceFile)
    {
    }
}
