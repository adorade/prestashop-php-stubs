<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler;

/**
 * Interface for service that updates cart language
 */
interface UpdateCartLanguageHandlerInterface
{
    /**
     * @param UpdateCartLanguageCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\UpdateCartLanguageCommand $command): void;
}
