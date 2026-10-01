<?php

namespace PrestaShop\PrestaShop\Core\Domain\Meta\CommandHandler;

/**
 * Interface AddMetaHandlerInterface defines contract for AddMetaHandler.
 */
interface AddMetaHandlerInterface
{
    /**
     * Used to handle the logic required for adding meta data.
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Meta\Command\AddMetaCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Meta\ValueObject\MetaId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Meta\Command\AddMetaCommand $command);
}
