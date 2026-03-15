<?php

namespace PrestaShop\PrestaShop\Core\Export\FileWriter;

/**
 * Interface FileWriterInterface.
 */
interface FileWriterInterface
{
    /**
     * Write data to file.
     *
     * @param string $fileName
     * @param ExportableDataInterface $data
     *
     * @return SplFileInfo
     */
    public function write($fileName, \PrestaShop\PrestaShop\Core\Export\Data\ExportableDataInterface $data);
}
