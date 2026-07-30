<?php

abstract class AbstractAssetManagerCore
{
    use \PrestaShop\PrestaShop\Adapter\Assets\AssetUrlGeneratorTrait;
    protected $directories;
    protected $configuration;
    protected $list = [];
    public const DEFAULT_MEDIA = 'all';
    public const DEFAULT_PRIORITY = 50;
    public const DEFAULT_JS_POSITION = 'bottom';
    public function __construct(array $directories, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    abstract protected function getDefaultList();
    abstract protected function getList();
    /**
     * @param string $relativePath
     *
     * @return bool|string
     */
    public function getFullPath(string $relativePath)
    {
    }
}
