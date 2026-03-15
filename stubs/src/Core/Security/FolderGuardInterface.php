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
     * @throws IOException
     * @throws FileNotFoundException
     */
    public function protectFolder($folderPath);
}
