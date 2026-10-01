<?php

namespace PrestaShop\PrestaShop\Core\Domain\ImageSettings\CommandHandler;

/**
 * Defines contract for DeleteImageTypeHandler
 */
interface DeleteImageTypeHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\ImageSettings\Command\DeleteImageTypeCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ImageSettings\Command\DeleteImageTypeCommand $command): void;
}
