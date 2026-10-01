<?php

namespace PrestaShop\PrestaShop\Adapter\Category\CommandHandler;

/**
 * Class BulkDeleteCategoriesHandler.
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class BulkDeleteCategoriesHandler extends \PrestaShop\PrestaShop\Adapter\Category\CommandHandler\AbstractDeleteCategoryHandler implements \PrestaShop\PrestaShop\Core\Domain\Category\CommandHandler\BulkDeleteCategoriesHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CannotDeleteRootCategoryForShopException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\FailedToDeleteCategoryException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\BulkDeleteCategoriesCommand $command)
    {
    }
}
