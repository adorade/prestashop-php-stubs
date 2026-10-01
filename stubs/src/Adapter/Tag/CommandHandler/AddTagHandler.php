<?php

namespace PrestaShop\PrestaShop\Adapter\Tag\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class AddTagHandler implements \PrestaShop\PrestaShop\Core\Domain\Tag\CommandHandler\AddTagCommandHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Tag\Command\AddTagCommand $command): \PrestaShop\PrestaShop\Core\Domain\Tag\ValueObject\TagId
    {
    }
    /**
     * Asserts that new tag does not duplicate already tags
     */
    protected function assertTagIsNotDuplicate(\PrestaShop\PrestaShop\Core\Domain\Tag\Command\AddTagCommand $command)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Tag\Command\AddTagCommand $command
     *
     * @return \Tag
     */
    protected function createLegacyTagFromCommand(\PrestaShop\PrestaShop\Core\Domain\Tag\Command\AddTagCommand $command): \Tag
    {
    }
}
