<?php

namespace PrestaShop\PrestaShop\Adapter\Category\CommandHandler;

/**
 * Class ChangeCategoriesStatusHandler.
 *
 * @internal
 */
final class BulkUpdateCategoriesStatusHandler implements \PrestaShop\PrestaShop\Core\Domain\Category\CommandHandler\BulkUpdateCategoriesStatusHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CannotUpdateCategoryStatusException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\BulkUpdateCategoriesStatusCommand $command)
    {
    }
}
