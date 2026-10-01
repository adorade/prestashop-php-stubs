<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler;

/**
 * Defines contract for delete cart handler
 */
interface DeleteCartHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Cart\Command\DeleteCartCommand $command
     *
     * @throw CartException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\DeleteCartCommand $command): void;
}
