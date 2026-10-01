<?php

namespace PrestaShop\PrestaShop\Adapter\Module\CommandHandler;

/**
 * Bulk toggles Module status
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class BulkToggleModuleStatusHandler implements \PrestaShop\PrestaShop\Core\Domain\Module\CommandHandler\BulkToggleModuleStatusHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Module\ModuleManager $moduleManager
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Module\ModuleManager $moduleManager, private readonly \PrestaShop\PrestaShop\Core\Module\ModuleRepository $moduleRepository, private readonly \Psr\Log\LoggerInterface $logger)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Module\Command\BulkToggleModuleStatusCommand $command): void
    {
    }
}
