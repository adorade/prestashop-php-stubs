<?php

namespace PrestaShopBundle\Twig\Locator;

/**
 * Loads templates from PrestaShop modules.
 */
class ModuleTemplateLoader extends \Twig\Loader\FilesystemLoader
{
    /**
     * @param array $namespaces a collection of path namespaces with namespace names
     * @param array $modulePaths A path or an array of paths where to look for module templates
     */
    public function __construct(array $namespaces, array $modulePaths = [])
    {
    }
}
