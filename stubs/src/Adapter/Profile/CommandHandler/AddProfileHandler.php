<?php

namespace PrestaShop\PrestaShop\Adapter\Profile\CommandHandler;

/**
 * Adds new employee profile using legacy object model
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class AddProfileHandler implements \PrestaShop\PrestaShop\Core\Domain\Profile\CommandHandler\AddProfileHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Profile\Command\AddProfileCommand $command)
    {
    }
}
