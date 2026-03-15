<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler;

/**
 * Interface for handling SendProcessOrderEmail command
 */
interface SendProcessOrderEmailHandlerInterface
{
    /**
     * @param SendProcessOrderEmailCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\SendProcessOrderEmailCommand $command): void;
}
