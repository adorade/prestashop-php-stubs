<?php

namespace PrestaShop\PrestaShop\Core\MailTemplate;

/**
 * Class FolderThemeScanner is used to scan a mail theme folder, it returns a ThemeInterface with all
 * its layouts.
 */
final class FolderThemeScanner
{
    public function __construct(private string $moduleDirectory = _PS_MODULE_DIR_)
    {
    }
    /**
     * @param string $mailThemeFolder
     *
     * @return ThemeInterface|null
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\FileNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Exception\TypeException
     */
    public function scan($mailThemeFolder)
    {
    }
}
