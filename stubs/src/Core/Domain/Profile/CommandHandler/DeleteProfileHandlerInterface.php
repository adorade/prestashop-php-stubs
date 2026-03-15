<?php

namespace PrestaShop\PrestaShop\Core\Domain\Profile\CommandHandler;

/**
 * Interface DeleteProfileHandlerInterface defines profile deletion handler.
 */
interface DeleteProfileHandlerInterface
{
    /**
     * Delete profile.
     *
     * @param DeleteProfileCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Profile\Command\DeleteProfileCommand $command);
}
