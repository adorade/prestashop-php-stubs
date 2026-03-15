<?php

namespace PrestaShop\PrestaShop\Adapter\Profile\CommandHandler;

/**
 * Class BulkDeleteProfileHandler
 *
 * @internal
 */
final class BulkDeleteProfileHandler extends \PrestaShop\PrestaShop\Adapter\Profile\CommandHandler\AbstractProfileHandler implements \PrestaShop\PrestaShop\Core\Domain\Profile\CommandHandler\BulkDeleteProfileHandlerInterface
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
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Profile\Command\BulkDeleteProfileCommand $command)
    {
    }
}
