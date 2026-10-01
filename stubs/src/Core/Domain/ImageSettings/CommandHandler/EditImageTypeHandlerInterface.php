<?php

namespace PrestaShop\PrestaShop\Core\Domain\ImageSettings\CommandHandler;

/**
 * Defines contract for EditImageTypeHandler
 */
interface EditImageTypeHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\ImageSettings\Command\EditImageTypeCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ImageSettings\Command\EditImageTypeCommand $command): void;
}
