<?php

namespace PrestaShop\PrestaShop\Adapter\Category\CommandHandler;

/**
 * Class EditRootCategoryHandler.
 */
final class EditRootCategoryHandler extends \PrestaShop\PrestaShop\Adapter\Domain\AbstractObjectModelHandler implements \PrestaShop\PrestaShop\Core\Domain\Category\CommandHandler\EditRootCategoryHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws CannotEditCategoryException
     * @throws CategoryNotFoundException
     * @throws CannotEditRootCategoryException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\EditRootCategoryCommand $command)
    {
    }
}
