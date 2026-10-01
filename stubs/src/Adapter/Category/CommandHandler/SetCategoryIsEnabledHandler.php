<?php

namespace PrestaShop\PrestaShop\Adapter\Category\CommandHandler;

/**
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class SetCategoryIsEnabledHandler implements \PrestaShop\PrestaShop\Core\Domain\Category\CommandHandler\SetCategoryIsEnabledHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CannotUpdateCategoryStatusException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\SetCategoryIsEnabledCommand $command)
    {
    }
}
