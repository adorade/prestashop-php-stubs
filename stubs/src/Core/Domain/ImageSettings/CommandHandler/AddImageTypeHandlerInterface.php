<?php

namespace PrestaShop\PrestaShop\Core\Domain\ImageSettings\CommandHandler;

/**
 * Interface for service that creates new image type
 */
interface AddImageTypeHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\ImageSettings\Command\AddImageTypeCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\ImageSettings\ValueObject\ImageTypeId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ImageSettings\Command\AddImageTypeCommand $command): \PrestaShop\PrestaShop\Core\Domain\ImageSettings\ValueObject\ImageTypeId;
}
