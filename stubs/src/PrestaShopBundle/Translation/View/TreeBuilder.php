<?php

namespace PrestaShopBundle\Translation\View;

class TreeBuilder
{
    /**
     * @param string $locale
     * @param string|null $theme
     */
    public function __construct($locale, $theme)
    {
    }
    /**
     * @param AbstractProvider $provider
     * @param string|array|null $search
     *
     * @return array|mixed
     */
    public function makeTranslationArray(\PrestaShopBundle\Translation\Provider\AbstractProvider $provider, $search = null)
    {
    }
    /**
     * @return array
     */
    public function makeTranslationsTree($catalogue)
    {
    }
    /**
     * Clean tree to use it with the new API system.
     *
     * @param array $tree
     * @param Router $router
     * @param string|null $theme
     * @param null $search
     * @param string|null $module
     *
     * @return array
     */
    public function cleanTreeToApi($tree, \Symfony\Bundle\FrameworkBundle\Routing\Router $router, $theme = null, $search = null, $module = null)
    {
    }
}
