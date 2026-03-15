<?php

namespace PrestaShop\PrestaShop\Core\File\Converter;

/**
 * Interface FileConverterInterface defines a file converter.
 */
interface FileConverterInterface
{
    /**
     * Converts a file to a different format.
     *
     * @param SplFileInfo $sourceFile file to convert
     *
     * @return SplFileInfo converted file
     */
    public function convert(\SplFileInfo $sourceFile);
}
