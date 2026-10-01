<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shop\CommandHandler;

/**
 * Interface for service which handles UploadLogosCommand
 */
interface UploadLogosHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\Command\UploadLogosCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shop\Command\UploadLogosCommand $command);
}
