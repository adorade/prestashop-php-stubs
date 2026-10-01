<?php

namespace PrestaShop\PrestaShop\Adapter\Category\CommandHandler;

/**
 * Class EditCategoryHandler.
 *
 * @internal
 */
final class EditCategoryHandler extends \PrestaShop\PrestaShop\Adapter\Domain\AbstractObjectModelHandler implements \PrestaShop\PrestaShop\Core\Domain\Category\CommandHandler\EditCategoryHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CannotEditRootCategoryException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\EditCategoryCommand $command)
    {
    }
}
