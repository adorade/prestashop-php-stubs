<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Group\CommandHandler;

interface DeleteCustomerGroupHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Group\Command\DeleteCustomerGroupCommand $command): void;
}
