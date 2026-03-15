<?php

class CccReducerCore
{
    use \PrestaShop\PrestaShop\Adapter\Assets\AssetUrlGeneratorTrait;
    /** @var Filesystem */
    protected $filesystem;
    /** @var ConfigurationInterface */
    public $configuration;
    /**
     * @param string $cacheDir
     * @param ConfigurationInterface $configuration
     * @param Filesystem $filesystem
     */
    public function __construct($cacheDir, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, \Symfony\Component\Filesystem\Filesystem $filesystem)
    {
    }
    /**
     * @param array $cssFileList
     *
     * @return array Same list, reduced
     */
    public function reduceCss($cssFileList)
    {
    }
    /**
     * @param array $jsFileList
     *
     * @return array Same list, reduced
     */
    public function reduceJs($jsFileList)
    {
    }
}
