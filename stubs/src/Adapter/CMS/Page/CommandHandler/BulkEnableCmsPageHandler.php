<?php

namespace PrestaShop\PrestaShop\Adapter\CMS\Page\CommandHandler;

/**
 * Enables multiple cms pages.
 */
final class BulkEnableCmsPageHandler extends \PrestaShop\PrestaShop\Adapter\CMS\Page\CommandHandler\AbstractCmsPageHandler implements \PrestaShop\PrestaShop\Core\Domain\CmsPage\CommandHandler\BulkEnableCmsPageHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws CmsPageException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPage\Command\BulkEnableCmsPageCommand $command)
    {
    }
}
