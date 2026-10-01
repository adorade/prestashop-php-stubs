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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CannotEditCategoryException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CannotEditRootCategoryException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\EditRootCategoryCommand $command)
    {
    }
}
