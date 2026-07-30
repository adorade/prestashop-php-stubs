<?php

namespace PrestaShop\PrestaShop\Adapter\CMS\Page\CommandHandler;

/**
 * Disables multiple cms pages.
 */
final class BulkDisableCmsPageHandler extends \PrestaShop\PrestaShop\Adapter\CMS\Page\CommandHandler\AbstractCmsPageHandler implements \PrestaShop\PrestaShop\Core\Domain\CmsPage\CommandHandler\BulkDisableCmsPageHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @param BulkDisableCmsPageCommand $command
     *
     * @throws CannotDisableCmsPageException
     * @throws CmsPageException
     * @throws CmsPageNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPage\Command\BulkDisableCmsPageCommand $command)
    {
    }
}
