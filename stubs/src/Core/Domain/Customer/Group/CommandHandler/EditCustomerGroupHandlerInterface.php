<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Group\CommandHandler;

interface EditCustomerGroupHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Group\Command\EditCustomerGroupCommand $command): void;
}
