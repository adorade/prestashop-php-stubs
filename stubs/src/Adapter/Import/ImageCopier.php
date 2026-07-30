<?php

namespace PrestaShop\PrestaShop\Adapter\Import;

/**
 * Class ImageCopier copies images during import process.
 */
final class ImageCopier
{
    /**
     * @param ConfigurationInterface $configuration
     * @param Tools $tools
     * @param int $contextShopId
     * @param HookDispatcherInterface $hookDispatcher
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, \PrestaShop\PrestaShop\Adapter\Tools $tools, $contextShopId, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher)
    {
    }
    /**
     * Copy an image located in $url and save it in a path.
     *
     * @param int $entityId id of product or category (set in entity)
     * @param int $imageId id of the image if watermark enabled
     * @param string $url path or url to use
     * @param string $entity 'products' or 'categories'
     * @param bool $regenerate
     *
     * @return bool
     */
    public function copyImg($entityId, $imageId = null, $url = '', $entity = 'products', $regenerate = true)
    {
    }
}
