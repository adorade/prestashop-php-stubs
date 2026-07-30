<?php

namespace PrestaShop\PrestaShop\Core\Domain\Profile\CommandHandler;

/**
 * Interface for service that handles adding new profile
 */
interface AddProfileHandlerInterface
{
    /**
     * @param AddProfileCommand $command
     *
     * @return ProfileId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Profile\Command\AddProfileCommand $command);
}
