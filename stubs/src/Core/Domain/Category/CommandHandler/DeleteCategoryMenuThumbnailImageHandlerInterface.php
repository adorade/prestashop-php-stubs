<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\CommandHandler;

/**
 * Defines contract for service that handles category menu thumbnail deleting command.
 */
interface DeleteCategoryMenuThumbnailImageHandlerInterface
{
    /**
     * @param DeleteCategoryMenuThumbnailImageCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\DeleteCategoryMenuThumbnailImageCommand $command);
}
