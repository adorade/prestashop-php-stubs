<?php

namespace PrestaShop\PrestaShop\Adapter\CMS\Page\CommandHandler;

/**
 * Handles AddCmsPageCommand using legacy object model
 */
final class AddCmsPageHandler extends \PrestaShop\PrestaShop\Adapter\CMS\Page\CommandHandler\AbstractCmsPageHandler implements \PrestaShop\PrestaShop\Core\Domain\CmsPage\CommandHandler\AddCmsPageHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPage\Command\AddCmsPageCommand $command)
    {
    }
}
