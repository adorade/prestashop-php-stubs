<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Group\CommandHandler;

interface AddCustomerGroupHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Customer\Group\Command\AddCustomerGroupCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Customer\Group\ValueObject\GroupId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Group\Command\AddCustomerGroupCommand $command): \PrestaShop\PrestaShop\Core\Domain\Customer\Group\ValueObject\GroupId;
}
