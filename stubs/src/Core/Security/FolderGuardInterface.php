<?php

namespace PrestaShop\PrestaShop\Core\Security;

/**
 * Interface used to protect a folder (via htaccess file, index.php redirection file, ...)
 */
interface FolderGuardInterface
{
    /**
     * @param string $folderPath
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\IOException
     * @throws \PrestaShop\PrestaShop\Core\Exception\FileNotFoundException
     */
    public function protectFolder($folderPath);
}
