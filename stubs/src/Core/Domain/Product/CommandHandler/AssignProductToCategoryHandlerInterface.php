<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler;

interface AssignProductToCategoryHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Command\AssignProductToCategoryCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\AssignProductToCategoryCommand $command);
}
