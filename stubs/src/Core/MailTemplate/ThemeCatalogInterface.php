<?php

namespace PrestaShop\PrestaShop\Core\MailTemplate;

/**
 * Interface ThemeCatalogInterface is used to list the available themes to generate
 * mail templates, each one containing its own layouts. Layouts are divided in two
 * categories "core" and "modules" layouts. You can change the themes collection or
 * modify a theme's layout collection via the hook:
 *  ThemeCatalogInterface::LIST_MAIL_THEMES_HOOK = actionListMailThemes
 */
interface ThemeCatalogInterface
{
    public const LIST_MAIL_THEMES_HOOK = 'actionListMailThemes';
    /**
     * Returns the list of existing themes.
     *
     * @return ThemeCollectionInterface
     */
    public function listThemes();
    /**
     * @param string $theme
     *
     * @throws InvalidArgumentException
     *
     * @return ThemeInterface
     */
    public function getByName($theme);
}
