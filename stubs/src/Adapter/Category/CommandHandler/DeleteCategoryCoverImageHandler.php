<?php

namespace PrestaShop\PrestaShop\Adapter\Category\CommandHandler;

/**
 * Handles category cover image deleting command.
 *
 * @internal
 */
final class DeleteCategoryCoverImageHandler implements \PrestaShop\PrestaShop\Core\Domain\Category\CommandHandler\DeleteCategoryCoverImageHandlerInterface
{
    /**
     * @param Filesystem $filesystem
     * @param ConfigurationInterface $configuration
     */
    public function __construct(\Symfony\Component\Filesystem\Filesystem $filesystem, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\DeleteCategoryCoverImageCommand $command)
    {
    }
}
