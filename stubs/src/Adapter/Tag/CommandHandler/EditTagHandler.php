<?php

namespace PrestaShop\PrestaShop\Adapter\Tag\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class EditTagHandler implements \PrestaShop\PrestaShop\Core\Domain\Tag\CommandHandler\EditTagCommandHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Tag\Command\EditTagCommand $command): void
    {
    }
    protected function updateLegacyTagWithCommandData(\Tag $tag, \PrestaShop\PrestaShop\Core\Domain\Tag\Command\EditTagCommand $command): void
    {
    }
}
