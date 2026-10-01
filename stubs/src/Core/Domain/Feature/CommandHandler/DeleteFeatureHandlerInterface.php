<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\CommandHandler;

interface DeleteFeatureHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Feature\Command\DeleteFeatureCommand $command): void;
}
