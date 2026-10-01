<?php

namespace PrestaShop\PrestaShop\Core\Import\File;

/**
 * Interface FileReaderInterface describes a file reader.
 */
interface FileReaderInterface
{
    /**
     * Read the file.
     *
     * @param \SplFileInfo $file
     *
     * @return \Generator
     *
     * @throws \PrestaShop\PrestaShop\Core\Import\Exception\UnreadableFileException
     */
    public function read(\SplFileInfo $file);
}
