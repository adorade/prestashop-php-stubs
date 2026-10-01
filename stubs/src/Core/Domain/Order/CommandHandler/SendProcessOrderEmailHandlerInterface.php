<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler;

/**
 * Interface for handling SendProcessOrderEmail command
 */
interface SendProcessOrderEmailHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Order\Command\SendProcessOrderEmailCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\SendProcessOrderEmailCommand $command): void;
}
