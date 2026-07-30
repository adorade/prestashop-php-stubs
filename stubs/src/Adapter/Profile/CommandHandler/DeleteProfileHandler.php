<?php

namespace PrestaShop\PrestaShop\Adapter\Profile\CommandHandler;

/**
 * Class DeleteProfileHandler
 *
 * @internal
 */
final class DeleteProfileHandler extends \PrestaShop\PrestaShop\Adapter\Profile\CommandHandler\AbstractProfileHandler implements \PrestaShop\PrestaShop\Core\Domain\Profile\CommandHandler\DeleteProfileHandlerInterface
{
    /**
     * @param int $superAdminProfileId
     * @param ContextEmployeeProviderInterface $contextEmployeeProvider
     */
    public function __construct($superAdminProfileId, \PrestaShop\PrestaShop\Core\Employee\ContextEmployeeProviderInterface $contextEmployeeProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Profile\Command\DeleteProfileCommand $command)
    {
    }
}
