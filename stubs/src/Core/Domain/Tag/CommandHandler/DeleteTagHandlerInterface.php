<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tag\CommandHandler;

/**
 * Defines contract for DeleteTagHandler
 */
interface DeleteTagHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Tag\Command\DeleteTagCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Tag\Command\DeleteTagCommand $command): void;
}
