<?php

namespace PrestaShop\PrestaShop\Core\Domain\ShowcaseCard\CommandHandler;

/**
 * Saves the showcase card status to keep it closed
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class CloseShowcaseCardHandler implements \PrestaShop\PrestaShop\Core\Domain\ShowcaseCard\CommandHandler\CloseShowcaseCardHandlerInterface
{
    /**
     * CloseShowcaseCardHandler constructor.
     *
     * @param \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration
     * @param \PrestaShop\PrestaShop\Core\Domain\ShowcaseCard\ConfigurationMap $configurationMap
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, \PrestaShop\PrestaShop\Core\Domain\ShowcaseCard\ConfigurationMap $configurationMap)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\ShowcaseCard\Command\CloseShowcaseCardCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ShowcaseCard\Command\CloseShowcaseCardCommand $command)
    {
    }
}
