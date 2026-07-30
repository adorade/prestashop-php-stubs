<?php

namespace PrestaShop\PrestaShop\Adapter\File;

/**
 * Class HtaccessFileGenerator is responsible for generating htaccess file with its default content.
 */
class HtaccessFileGenerator
{
    /**
     * HtaccessFileGenerator constructor.
     *
     * @param CacheClearerInterface $cacheClearer
     * @param Tools $tools
     * @param bool $multipleViewsConfiguration
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface $cacheClearer, \PrestaShop\PrestaShop\Adapter\Tools $tools, $multipleViewsConfiguration)
    {
    }
    /**
     * Generates htaccess file and its content.
     *
     * @param bool|null $disableMultiView if null, rely on the Shop configuration
     *
     * @return bool
     */
    public function generateFile($disableMultiView = null)
    {
    }
}
