<?php

namespace PrestaShop\PrestaShop\Adapter\CMS\PageCategory\CommandHandler;

/**
 * Class ToggleCmsPageCategoryStatusHandler is responsible for turning on and off cms page category status.
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class ToggleCmsPageCategoryStatusHandler implements \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\CommandHandler\ToggleCmsPageCategoryStatusHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Exception\CmsPageCategoryException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command\ToggleCmsPageCategoryStatusCommand $command)
    {
    }
}
