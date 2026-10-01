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
     * @param \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher
     */
    public function __construct($mailThemesFolder, \PrestaShop\PrestaShop\Core\MailTemplate\FolderThemeScanner $scanner, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher)
    {
    }
    /**
     * Returns the list of found themes (non empty folders, in the mail themes
     * folder).
     *
     * @return ThemeCollectionInterface
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\FileNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Exception\TypeException
     */
    public function listThemes()
    {
    }
    /**
     * @param string $theme
     *
     * @return ThemeInterface
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\FileNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Exception\InvalidArgumentException
     * @throws \PrestaShop\PrestaShop\Core\Exception\TypeException
     */
    public function getByName($theme)
    {
    }
}
