<?php

namespace PrestaShop\PrestaShop\Adapter\Category\CommandHandler;

/**
 * Class DeleteCategoryHandler.
 */
final class DeleteCategoryHandler extends \PrestaShop\PrestaShop\Adapter\Category\CommandHandler\AbstractDeleteCategoryHandler implements \PrestaShop\PrestaShop\Core\Domain\Category\CommandHandler\DeleteCategoryHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws CategoryNotFoundException
     * @throws CannotDeleteRootCategoryForShopException
     * @throws FailedToDeleteCategoryException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\DeleteCategoryCommand $command)
    {
    }
}
