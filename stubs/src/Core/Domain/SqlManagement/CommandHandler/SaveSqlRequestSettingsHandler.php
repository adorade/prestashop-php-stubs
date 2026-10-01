<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\CommandHandler;

/**
 * Class SaveSqlRequestSettingsHandler handles command to save SqlRequest settings.
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class SaveSqlRequestSettingsHandler implements \PrestaShop\PrestaShop\Core\Domain\SqlManagement\CommandHandler\SaveSqlRequestSettingsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Command\SaveSqlRequestSettingsCommand $command)
    {
    }
}
