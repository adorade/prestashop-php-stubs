<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\CommandHandler;

interface DeleteFeatureValueHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Feature\Command\DeleteFeatureValueCommand $command): void;
}
