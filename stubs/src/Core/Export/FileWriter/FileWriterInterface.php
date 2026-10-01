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
     * @param \PrestaShop\PrestaShop\Core\Export\Data\ExportableDataInterface $data
     * @param string $separator
     *
     * @return \SplFileInfo
     */
    public function write(string $fileName, \PrestaShop\PrestaShop\Core\Export\Data\ExportableDataInterface $data, string $separator): \SplFileInfo;
}
