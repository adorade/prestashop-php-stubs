<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPage\CommandHandler;

/**
 * Interface for services that handles AddCmsPageCommand
 */
interface AddCmsPageHandlerInterface
{
    /**
     * @param AddCmsPageCommand $command
     *
     * @return CmsPageId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPage\Command\AddCmsPageCommand $command);
}
