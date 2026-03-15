<?php

namespace PrestaShop\PrestaShop\Adapter\Configuration\CommandHandler;

/**
 * Handles command that switches debug mode
 *
 * @internal
 */
final class SwitchDebugModeHandler implements \PrestaShop\PrestaShop\Core\Domain\Configuration\CommandHandler\SwitchDebugModeHandlerInterface
{
    /**
     * @param DebugMode $debugMode
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Debug\DebugMode $debugMode)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Configuration\Command\SwitchDebugModeCommand $command)
    {
    }
}
