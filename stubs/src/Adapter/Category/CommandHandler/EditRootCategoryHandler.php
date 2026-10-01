<?php

namespace PrestaShop\PrestaShop\Adapter\Category\CommandHandler;

/**
 * Class EditRootCategoryHandler.
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class EditRootCategoryHandler extends \PrestaShop\PrestaShop\Adapter\Category\CommandHandler\AbstractEditCategoryHandler implements \PrestaShop\PrestaShop\Core\Domain\Category\CommandHandler\EditRootCategoryHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Category\Command\EditRootCategoryCommand $command
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CannotEditCategoryException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CannotEditRootCategoryException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\EditRootCategoryCommand $command)
    {
    }
}
