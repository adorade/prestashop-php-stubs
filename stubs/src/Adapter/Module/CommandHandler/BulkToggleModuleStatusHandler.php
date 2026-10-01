<?php

namespace PrestaShop\PrestaShop\Adapter\Module\CommandHandler;

/**
 * Bulk toggles Module status
 */
class BulkToggleModuleStatusHandler implements \PrestaShop\PrestaShop\Core\Domain\Module\CommandHandler\BulkToggleModuleStatusHandlerInterface
{
    /**
     * @return \PrestaShop\PrestaShop\Core\Module\ModuleManager
     */
    protected $moduleManager;
    /**
     * @return \Psr\Log\LoggerInterface
     */
    protected $logger;
    /**
     * @return \PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface
     */
    protected $cacheClearer;
    /**
     * @param \PrestaShop\PrestaShop\Core\Module\ModuleManager $moduleManager
     * @param \Psr\Log\LoggerInterface $logger
     * @param \PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface $cacheClearer
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
