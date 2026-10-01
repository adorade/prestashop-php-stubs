<?php

namespace PrestaShop\PrestaShop\Adapter\Category\CommandHandler;

/**
 * Updates category position using legacy object model
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class UpdateCategoryPositionHandler implements \PrestaShop\PrestaShop\Core\Domain\Category\CommandHandler\UpdateCategoryPositionHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\UpdateCategoryPositionCommand $command)
    {
    }
}
