<?php

namespace PrestaShop\PrestaShop\Adapter\Category\CommandHandler;

/**
 * Adds new category using legacy object model.
 *
 * @internal
 */
final class AddCategoryHandler extends \PrestaShop\PrestaShop\Adapter\Domain\AbstractObjectModelHandler implements \PrestaShop\PrestaShop\Core\Domain\Category\CommandHandler\AddCategoryHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @param AddCategoryCommand $command
     *
     * @return CategoryId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\AddCategoryCommand $command)
    {
    }
}
