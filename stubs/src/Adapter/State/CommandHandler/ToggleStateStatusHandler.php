<?php

namespace PrestaShop\PrestaShop\Adapter\State\CommandHandler;

class ToggleStateStatusHandler implements \PrestaShop\PrestaShop\Core\Domain\State\CommandHandler\ToggleStateStatusHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\State\Exception\StateException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\State\Command\ToggleStateStatusCommand $command): void
    {
    }
}
