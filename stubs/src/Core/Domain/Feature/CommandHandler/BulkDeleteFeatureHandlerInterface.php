<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\CommandHandler;

interface BulkDeleteFeatureHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Feature\Command\BulkDeleteFeatureCommand $command): void;
}
