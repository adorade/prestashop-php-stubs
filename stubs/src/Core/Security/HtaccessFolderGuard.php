<?php

namespace PrestaShop\PrestaShop\Core\Security;

/**
 * Class HtaccessFolderGuard protects a designated folder by inserting an htaccess file in it
 * which prevents access from an external call.
 */
class HtaccessFolderGuard implements \PrestaShop\PrestaShop\Core\Security\FolderGuardInterface
{
    /**
     * @param string $htaccessTemplatePath
     *
     * @throws FileNotFoundException
     */
    public function __construct($htaccessTemplatePath)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function protectFolder($folderPath)
    {
    }
}
