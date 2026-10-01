<?php

namespace PrestaShop\PrestaShop\Core\Module;

class ConfigReader implements \PrestaShop\PrestaShop\Core\Module\ConfigReaderInterface
{
    /**
     * @var string
     */
    protected $modulesDirectoryPath;
    public function __construct(string $modulesDirectoryPath)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function read(string $name, string $isoCode): ?\PrestaShop\PrestaShop\Core\Util\ArrayFinder
    {
    }
    /**
     * Find config file depending on the iso code.
     *
     * @param string $name The module name
     * @param string $isoCode The current iso code format fr_FR
     *
     * @return string|null
     */
    protected function findConfigFile(string $name, string $isoCode): ?string
    {
    }
}
