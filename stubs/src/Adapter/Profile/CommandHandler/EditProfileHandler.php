<?php

namespace PrestaShop\PrestaShop\Adapter\Profile\CommandHandler;

/**
 * Edits Profile using legacy object model
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class EditProfileHandler implements \PrestaShop\PrestaShop\Core\Domain\Profile\CommandHandler\EditProfileHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Profile\Command\EditProfileCommand $command)
    {
    }
}
