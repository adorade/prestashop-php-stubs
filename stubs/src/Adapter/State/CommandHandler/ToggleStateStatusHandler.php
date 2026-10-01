<?php

namespace PrestaShop\PrestaShop\Adapter\State\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
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
