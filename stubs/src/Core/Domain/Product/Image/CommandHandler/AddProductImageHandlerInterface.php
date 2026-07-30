<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Image\CommandHandler;

/**
 * Defines contract to handle @see AddProductImageCommand
 */
interface AddProductImageHandlerInterface
{
    /**
     * @param AddProductImageCommand $command
     *
     * @return ImageId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Image\Command\AddProductImageCommand $command): \PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId;
}
