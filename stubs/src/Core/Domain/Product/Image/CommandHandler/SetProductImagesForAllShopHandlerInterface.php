<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Image\CommandHandler;

interface SetProductImagesForAllShopHandlerInterface
{
    /**
     * @param SetProductImagesForAllShopCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Image\Command\SetProductImagesForAllShopCommand $command): void;
}
