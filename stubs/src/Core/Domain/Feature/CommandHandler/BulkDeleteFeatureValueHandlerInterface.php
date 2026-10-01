<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\CommandHandler;

interface BulkDeleteFeatureValueHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Feature\Command\BulkDeleteFeatureValueCommand $command): void;
}
