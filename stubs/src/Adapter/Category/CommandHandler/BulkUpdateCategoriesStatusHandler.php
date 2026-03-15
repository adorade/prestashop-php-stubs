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
     * @throws CannotUpdateCategoryStatusException
     * @throws CategoryNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\BulkUpdateCategoriesStatusCommand $command)
    {
    }
}
