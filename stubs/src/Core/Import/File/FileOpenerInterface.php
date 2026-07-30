<?php

namespace PrestaShop\PrestaShop\Core\Import\File;

/**
 * Interface FileOpenerInterface describes an import file opener.
 */
interface FileOpenerInterface
{
    /**
     * @param SplFileInfo $file
     *
     * @return mixed file handle
     */
    public function open(\SplFileInfo $file);
}
