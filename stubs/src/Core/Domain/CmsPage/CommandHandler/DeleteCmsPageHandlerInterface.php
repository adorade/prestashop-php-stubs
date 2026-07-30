<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPage\CommandHandler;

/**
 * Defines contract for DeleteCmsPageHandler.
 */
interface DeleteCmsPageHandlerInterface
{
    /**
     * @param DeleteCmsPageCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPage\Command\DeleteCmsPageCommand $command);
}
