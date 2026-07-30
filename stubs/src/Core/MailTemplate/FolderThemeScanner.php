<?php

namespace PrestaShop\PrestaShop\Core\MailTemplate;

/**
 * Class FolderThemeScanner is used to scan a mail theme folder, it returns a ThemeInterface with all
 * its layouts.
 */
final class FolderThemeScanner
{
    /**
     * @param string $mailThemeFolder
     *
     * @return ThemeInterface|null
     *
     * @throws FileNotFoundException
     * @throws TypeException
     */
    public function scan($mailThemeFolder)
    {
    }
}
