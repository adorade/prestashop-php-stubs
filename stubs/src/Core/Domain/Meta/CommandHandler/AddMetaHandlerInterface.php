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
     * @param AddMetaCommand $command
     *
     * @return MetaId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Meta\Command\AddMetaCommand $command);
}
