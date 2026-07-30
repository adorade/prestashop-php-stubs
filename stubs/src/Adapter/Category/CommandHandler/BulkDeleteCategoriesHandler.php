<?php

namespace PrestaShop\PrestaShop\Adapter\Category\CommandHandler;

/**
 * Class BulkDeleteCategoriesHandler.
 */
final class BulkDeleteCategoriesHandler extends \PrestaShop\PrestaShop\Adapter\Category\CommandHandler\AbstractDeleteCategoryHandler implements \PrestaShop\PrestaShop\Core\Domain\Category\CommandHandler\BulkDeleteCategoriesHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws CategoryNotFoundException
     * @throws CannotDeleteRootCategoryForShopException
     * @throws FailedToDeleteCategoryException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\BulkDeleteCategoriesCommand $command)
    {
    }
}
