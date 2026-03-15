<?php

namespace PrestaShop\PrestaShop\Adapter\CMS\PageCategory\CommandHandler;

/**
 * Adds cms page category
 */
final class AddCmsPageCategoryHandler extends \PrestaShop\PrestaShop\Adapter\CMS\PageCategory\CommandHandler\AbstractCmsPageCategoryHandler implements \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\CommandHandler\AddCmsPageCategoryHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws CmsPageCategoryException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command\AddCmsPageCategoryCommand $command)
    {
    }
}
