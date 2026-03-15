<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\CommandHandler;

/**
 * Defines contract for EditCmsPageCategoryHandler.
 */
interface EditCmsPageCategoryHandlerInterface
{
    /**
     * @param EditCmsPageCategoryCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command\EditCmsPageCategoryCommand $command);
}
