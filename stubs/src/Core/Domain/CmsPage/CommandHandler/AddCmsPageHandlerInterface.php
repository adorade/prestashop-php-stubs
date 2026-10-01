<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPage\CommandHandler;

/**
 * Interface for services that handles AddCmsPageCommand
 */
interface AddCmsPageHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\CmsPage\Command\AddCmsPageCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\CmsPage\ValueObject\CmsPageId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPage\Command\AddCmsPageCommand $command);
}
