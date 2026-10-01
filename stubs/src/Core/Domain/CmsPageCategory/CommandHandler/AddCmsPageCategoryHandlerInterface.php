<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\CommandHandler;

/**
 * Interface AddCmsPageCategoryHandlerInterface defines contract for AddCmsPageCategoryHandler.
 */
interface AddCmsPageCategoryHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command\AddCmsPageCategoryCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\ValueObject\CmsPageCategoryId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command\AddCmsPageCategoryCommand $command);
}
