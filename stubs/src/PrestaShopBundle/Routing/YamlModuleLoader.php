<?php

namespace PrestaShopBundle\Routing;

/**
 * This class is responsible of loading routes of enabled modules.
 */
class YamlModuleLoader extends \Symfony\Component\Config\Loader\Loader
{
    public function __construct(array $activeModulesPaths)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function load($resource, $type = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function supports($resource, $type = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function import($resource, $type = null)
    {
    }
}
