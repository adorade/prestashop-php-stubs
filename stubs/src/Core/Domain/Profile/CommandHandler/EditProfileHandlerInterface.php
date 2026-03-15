<?php

namespace PrestaShop\PrestaShop\Core\Domain\Profile\CommandHandler;

/**
 * Interface for service that edits existing Profile
 */
interface EditProfileHandlerInterface
{
    /**
     * @param EditProfileCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Profile\Command\EditProfileCommand $command);
}
