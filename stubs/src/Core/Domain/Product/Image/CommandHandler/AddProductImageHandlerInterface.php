<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Image\CommandHandler;

/**
 * Defines contract to handle @see AddProductImageCommand
 */
interface AddProductImageHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Image\Command\AddProductImageCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Image\Command\AddProductImageCommand $command): \PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId;
}
