<?php

namespace PrestaShopBundle\Command;

class ConfigCommand extends \Symfony\Component\Console\Command\Command
{
    // return values
    public const STATUS_OK = 0;
    public const STATUS_INVALID_ACTION = 1;
    public const STATUS_VALUE_REQUIRED = 2;
    public const STATUS_FAILED_SET = 3;
    public const STATUS_FAILED_REMOVE = 4;
    public const STATUS_INVALID_OPTIONS = 5;
    public const STATUS_FAILED_SHOPCONSTRAINT = 6;
    public const STATUS_LANG_REQUIRED = 7;
    public const STATUS_NOT_IMPLEMENTED = 8;
    public const STATUS_ERROR = 9;
    /**
     * @var SymfonyStyle
     */
    protected $io;
    /**
     * @var InputInterface
     */
    protected $input;
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $configuration, \PrestaShop\PrestaShop\Adapter\Language\LanguageDataProvider $languageDataProvider)
    {
    }
    protected function configure(): void
    {
    }
    protected function init(): void
    {
    }
    /**
     * Main execute. Calls the method defined by action
     */
    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output): int
    {
    }
}
