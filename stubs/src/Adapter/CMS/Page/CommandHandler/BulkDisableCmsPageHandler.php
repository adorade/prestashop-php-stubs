<?php

namespace PrestaShop\PrestaShop\Adapter\CMS\Page\CommandHandler;

/**
 * Disables multiple cms pages.
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class BulkDisableCmsPageHandler extends \PrestaShop\PrestaShop\Adapter\CMS\Page\CommandHandler\AbstractCmsPageHandler implements \PrestaShop\PrestaShop\Core\Domain\CmsPage\CommandHandler\BulkDisableCmsPageHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\CmsPage\Command\BulkDisableCmsPageCommand $command
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\CmsPage\Exception\CannotDisableCmsPageException
     * @throws \PrestaShop\PrestaShop\Core\Domain\CmsPage\Exception\CmsPageException
     * @throws \PrestaShop\PrestaShop\Core\Domain\CmsPage\Exception\CmsPageNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPage\Command\BulkDisableCmsPageCommand $command)
    {
    }
}
