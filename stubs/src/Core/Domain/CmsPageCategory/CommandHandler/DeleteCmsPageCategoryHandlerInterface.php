<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\CommandHandler;

/**
 * Interface DeleteCmsPageCategoryHandlerInterface defines contract for DeleteCmsPageCategoryHandler.
 */
interface DeleteCmsPageCategoryHandlerInterface
{
    /**
     * @param DeleteCmsPageCategoryCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command\DeleteCmsPageCategoryCommand $command);
}
