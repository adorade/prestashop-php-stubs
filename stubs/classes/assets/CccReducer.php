<?php

class CccReducerCore
{
    use \PrestaShop\PrestaShop\Adapter\Assets\AssetUrlGeneratorTrait;
    /** @var \Symfony\Component\Filesystem\Filesystem */
    protected $filesystem;
    /** @var \PrestaShop\PrestaShop\Core\ConfigurationInterface */
    public $configuration;
    /**
     * @param string $cacheDir
     * @param \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration
     * @param \Symfony\Component\Filesystem\Filesystem $filesystem
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
