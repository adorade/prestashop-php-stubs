<?php

namespace PrestaShop\PrestaShop\Core\Theme;

class ConfigReader implements \PrestaShop\PrestaShop\Core\Theme\ConfigReaderInterface
{
    public const DEFAULT_CONFIGURATION_THEME = ['display_name' => 'N/A', 'version' => 'N/A', 'preview' => 'themes/preview-fallback.png'];
    /**
     * @var string
     */
    protected $themesDirectoryPath;
    public function __construct(string $themesDirectoryPath)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function read(string $name): ?\PrestaShop\PrestaShop\Core\Util\ArrayFinder
    {
    }
    /**
     * Find config file depending on the iso code.
     *
     * @param string $name The module name
     *
     * @return string|null
     */
    protected function findConfigFile(string $name): ?string
    {
    }
}
