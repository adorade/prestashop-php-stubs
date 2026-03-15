<?php

namespace PrestaShop\PrestaShop\Core\MailTemplate;

/**
 * Interface ThemeCollectionInterface contains a list of themes to
 * generate mail templates. Modules can add/remove their own through the hook:
 *  ThemeCatalogInterface::LIST_MAIL_THEMES_HOOK = actionListMailThemes
 */
interface ThemeCollectionInterface extends \IteratorAggregate, \Countable
{
    /**
     * @param ThemeInterface $theme
     *
     * @return bool
     */
    public function contains($theme);
    /**
     * @param ThemeInterface $theme
     */
    public function add($theme);
    /**
     * @param ThemeInterface $theme
     */
    public function remove($theme);
    /**
     * @param string $themeName
     *
     * @return ThemeInterface|null
     */
    public function getByName($themeName);
}
