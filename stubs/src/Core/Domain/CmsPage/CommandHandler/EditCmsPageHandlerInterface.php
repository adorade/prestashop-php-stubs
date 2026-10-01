<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPage\CommandHandler;

/**
 * Defines contract for EditCmsPageHandler.
 */
interface EditCmsPageHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\CmsPage\Command\EditCmsPageCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPage\Command\EditCmsPageCommand $command);
}
