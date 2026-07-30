<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler;

interface ResendOrderEmailHandlerInterface
{
    /**
     * @param ResendOrderEmailCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\ResendOrderEmailCommand $command): void;
}
