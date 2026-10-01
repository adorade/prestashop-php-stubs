<?php

namespace PrestaShop\PrestaShop\Adapter\Profile\Employee\CommandHandler;

/**
 * Class DeleteEmployeeHandler.
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class DeleteEmployeeHandler extends \PrestaShop\PrestaShop\Adapter\Profile\Employee\CommandHandler\AbstractEmployeeHandler implements \PrestaShop\PrestaShop\Core\Domain\Employee\CommandHandler\DeleteEmployeeHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Employee\Command\DeleteEmployeeCommand $command)
    {
    }
}
