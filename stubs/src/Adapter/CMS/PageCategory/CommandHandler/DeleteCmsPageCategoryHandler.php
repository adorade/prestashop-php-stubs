<?php

namespace PrestaShop\PrestaShop\Adapter\CMS\PageCategory\CommandHandler;

/**
 * Class DeleteCmsPageCategoryHandler is responsible for deleting cms page category.
 */
final class DeleteCmsPageCategoryHandler implements \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\CommandHandler\DeleteCmsPageCategoryHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws CmsPageCategoryException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command\DeleteCmsPageCategoryCommand $command)
    {
    }
}
