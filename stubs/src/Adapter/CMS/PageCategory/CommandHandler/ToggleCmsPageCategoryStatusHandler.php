<?php

namespace PrestaShop\PrestaShop\Adapter\CMS\PageCategory\CommandHandler;

/**
 * Class ToggleCmsPageCategoryStatusHandler is responsible for turning on and off cms page category status.
 */
final class ToggleCmsPageCategoryStatusHandler implements \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\CommandHandler\ToggleCmsPageCategoryStatusHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws CmsPageCategoryException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command\ToggleCmsPageCategoryStatusCommand $command)
    {
    }
}
