<?php

namespace PrestaShop\PrestaShop\Adapter\Category\CommandHandler;

/**
 * @internal
 */
final class SetCategoryIsEnabledHandler implements \PrestaShop\PrestaShop\Core\Domain\Category\CommandHandler\SetCategoryIsEnabledHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws CategoryNotFoundException
     * @throws CannotUpdateCategoryStatusException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\SetCategoryIsEnabledCommand $command)
    {
    }
}
