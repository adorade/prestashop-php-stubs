<?php

namespace PrestaShop\PrestaShop\Adapter\Profile\Employee\CommandHandler;

/**
 * Class ToggleEmployeeStatusHandler encapsulates Employee status toggling using legacy Employee object model.
 */
final class ToggleEmployeeStatusHandler extends \PrestaShop\PrestaShop\Adapter\Profile\Employee\CommandHandler\AbstractEmployeeHandler implements \PrestaShop\PrestaShop\Core\Domain\Employee\CommandHandler\ToggleEmployeeStatusHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Employee\Command\ToggleEmployeeStatusCommand $command)
    {
    }
}
