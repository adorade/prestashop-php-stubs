<?php

namespace PrestaShop\PrestaShop\Adapter\Tag\CommandHandler;

/**
 * Handles command that delete tag
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class DeleteTagHandler implements \PrestaShop\PrestaShop\Core\Domain\Tag\CommandHandler\DeleteTagHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Tag\Command\DeleteTagCommand $command): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Tag\ValueObject\TagId $tagId
     *
     * @return \Tag
     */
    protected function getLegacyTag(\PrestaShop\PrestaShop\Core\Domain\Tag\ValueObject\TagId $tagId): \Tag
    {
    }
}
