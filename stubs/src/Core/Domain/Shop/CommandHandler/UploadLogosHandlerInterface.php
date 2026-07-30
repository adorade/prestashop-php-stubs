<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shop\CommandHandler;

/**
 * Interface for service which handles UploadLogosCommand
 */
interface UploadLogosHandlerInterface
{
    /**
     * @param UploadLogosCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shop\Command\UploadLogosCommand $command);
}
