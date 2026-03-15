<?php

namespace PrestaShopBundle\DependencyInjection\Config;

/**
 * ConfigYamlLoader is used to load YAML config files and get the config as array.
 */
class ConfigYamlLoader extends \Symfony\Component\Config\Loader\FileLoader
{
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
     * Returns the parsed config after the YAML file has been loaded.
     *
     * @return array
     */
    public function getConfig(): array
    {
    }
}
