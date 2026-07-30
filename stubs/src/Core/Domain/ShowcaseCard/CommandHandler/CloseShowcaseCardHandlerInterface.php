<?php

namespace PrestaShop\PrestaShop\Core\Domain\ShowcaseCard\CommandHandler;

/**
 * Contract for handling CloseShowcaseCardCommand
 */
interface CloseShowcaseCardHandlerInterface
{
    /**
     * Closes a showcase card permanently
     *
     * @param CloseShowcaseCardCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ShowcaseCard\Command\CloseShowcaseCardCommand $command);
}
