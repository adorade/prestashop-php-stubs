<?php

namespace PrestaShop\PrestaShop\Core\MailTemplate;

/**
 * This is a basic mail layouts catalog, not a lot of intelligence it is based
 * simply on existing files on the $mailThemesFolder (no database, or config files).
 */
final class FolderThemeCatalog implements \PrestaShop\PrestaShop\Core\MailTemplate\ThemeCatalogInterface
{
    /**
     * @param string $mailThemesFolder
     * @param FolderThemeScanner $scanner
     * @param HookDispatcherInterface $hookDispatcher
     */
    public function __construct($mailThemesFolder, \PrestaShop\PrestaShop\Core\MailTemplate\FolderThemeScanner $scanner, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher)
    {
    }
    /**
     * Returns the list of found themes (non empty folders, in the mail themes
     * folder).
     *
     * @throws FileNotFoundException
     * @throws TypeException
     *
     * @return ThemeCollectionInterface
     */
    public function listThemes()
    {
    }
    /**
     * @param string $theme
     *
     * @throws FileNotFoundException
     * @throws InvalidArgumentException
     * @throws TypeException
     *
     * @return ThemeInterface
     */
    public function getByName($theme)
    {
    }
}
