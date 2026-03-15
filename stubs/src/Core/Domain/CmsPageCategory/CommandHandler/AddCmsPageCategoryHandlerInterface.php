<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\CommandHandler;

/**
 * Interface AddCmsPageCategoryHandlerInterface defines contract for AddCmsPageCategoryHandler.
 */
interface AddCmsPageCategoryHandlerInterface
{
    /**
     * @param AddCmsPageCategoryCommand $command
     *
     * @return CmsPageCategoryId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command\AddCmsPageCategoryCommand $command);
}
