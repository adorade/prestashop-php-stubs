<?php

namespace PrestaShop\PrestaShop\Adapter\Category\CommandHandler;

/**
 * Adds new category using legacy object model.
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class AddCategoryHandler extends \PrestaShop\PrestaShop\Adapter\Category\CommandHandler\AbstractEditCategoryHandler implements \PrestaShop\PrestaShop\Core\Domain\Category\CommandHandler\AddCategoryHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Category\Command\AddCategoryCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\AddCategoryCommand $command)
    {
    }
}
