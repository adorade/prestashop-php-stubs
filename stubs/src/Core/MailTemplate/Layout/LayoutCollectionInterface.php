<?php

namespace PrestaShop\PrestaShop\Core\MailTemplate\Layout;

/**
 * Interface MailLayoutCollectionInterface contains a list of layouts used to generate
 * mail templates. Modules can add/remove their own layouts to this collection through
 * the hook:
 *  ThemeCatalogInterface::LIST_MAIL_THEMES_HOOK = actionListMailThemes
 */
interface LayoutCollectionInterface extends \IteratorAggregate, \Countable
{
    /**
     * @param LayoutInterface $layout
     *
     * @return bool
     */
    public function contains($layout);
    /**
     * @param LayoutInterface $layout
     */
    public function add($layout);
    /**
     * @param LayoutInterface $layout
     */
    public function remove($layout);
    /**
     * @param LayoutInterface $oldLayout
     * @param LayoutInterface $newLayout
     *
     * @return bool
     */
    public function replace(\PrestaShop\PrestaShop\Core\MailTemplate\Layout\LayoutInterface $oldLayout, \PrestaShop\PrestaShop\Core\MailTemplate\Layout\LayoutInterface $newLayout);
    /**
     * @param string $layoutName
     * @param string $moduleName
     *
     * @return LayoutInterface|null
     */
    public function getLayout($layoutName, $moduleName);
    /**
     * @param LayoutCollectionInterface $collection
     */
    public function merge(\PrestaShop\PrestaShop\Core\MailTemplate\Layout\LayoutCollectionInterface $collection);
}
