<?php

namespace PrestaShop\PrestaShop\Adapter\Category\CommandHandler;

/**
 * Handles category cover image deleting command.
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class DeleteCategoryCoverImageHandler implements \PrestaShop\PrestaShop\Core\Domain\Category\CommandHandler\DeleteCategoryCoverImageHandlerInterface
{
    /**
     * @param \Symfony\Component\Filesystem\Filesystem $filesystem
     * @param \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration
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
