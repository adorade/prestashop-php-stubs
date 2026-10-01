<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\CommandHandler;

/**
 * Defines contract for service that handles category menu thumbnail deleting command.
 */
interface DeleteCategoryMenuThumbnailImageHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Category\Command\DeleteCategoryMenuThumbnailImageCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\DeleteCategoryMenuThumbnailImageCommand $command);
}
