<?php

namespace PrestaShop\PrestaShop\Adapter\Category\CommandHandler;

/**
 * Handles command which deletes given category menu thumbnail.
 *
 * @internal
 */
final class DeleteCategoryMenuThumbnailImageHandler implements \PrestaShop\PrestaShop\Core\Domain\Category\CommandHandler\DeleteCategoryMenuThumbnailImageHandlerInterface
{
    /**
     * @param \Symfony\Component\Filesystem\Filesystem $filesystem
     * @param \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration
     * @param \PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface $smartyCacheClearer
     */
    public function __construct(\Symfony\Component\Filesystem\Filesystem $filesystem, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, \PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface $smartyCacheClearer)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\DeleteCategoryMenuThumbnailImageCommand $command)
    {
    }
}
