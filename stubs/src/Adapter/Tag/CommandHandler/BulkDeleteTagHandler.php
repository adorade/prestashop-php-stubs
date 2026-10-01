<?php

namespace PrestaShop\PrestaShop\Adapter\Tag\CommandHandler;

/**
 * Handles command that bulk delete tags
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class BulkDeleteTagHandler implements \PrestaShop\PrestaShop\Core\Domain\Tag\CommandHandler\BulkDeleteTagHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Tag\Command\BulkDeleteTagCommand $command): void
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
