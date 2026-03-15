<?php

namespace PrestaShop\PrestaShop\Adapter\Module\CommandHandler;

/**
 * Bulk toggles Module status
 */
class BulkToggleModuleStatusHandler implements \PrestaShop\PrestaShop\Core\Domain\Module\CommandHandler\BulkToggleModuleStatusHandlerInterface
{
    /**
     * @return ModuleManager
     */
    protected $moduleManager;
    /**
     * @return LoggerInterface
     */
    protected $logger;
    /**
     * @return CacheClearerInterface
     */
    protected $cacheClearer;
    /**
     * @param ModuleManager $moduleManager
     * @param LoggerInterface $logger
     * @param CacheClearerInterface $cacheClearer
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Module\ModuleManager $moduleManager, \Psr\Log\LoggerInterface $logger, \PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface $cacheClearer)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Module\Command\BulkToggleModuleStatusCommand $command): void
    {
    }
}
