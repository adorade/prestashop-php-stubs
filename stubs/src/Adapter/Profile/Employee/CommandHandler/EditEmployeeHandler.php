<?php

namespace PrestaShop\PrestaShop\Adapter\Profile\Employee\CommandHandler;

/**
 * Handles command which edits employee using legacy object model
 *
 * @internal
 */
final class EditEmployeeHandler extends \PrestaShop\PrestaShop\Adapter\Profile\Employee\CommandHandler\AbstractEmployeeHandler implements \PrestaShop\PrestaShop\Core\Domain\Employee\CommandHandler\EditEmployeeHandlerInterface
{
    /**
     * @param Hashing $hashing
     * @param ProfileAccessCheckerInterface $profileAccessChecker
     * @param ContextEmployeeProviderInterface $contextEmployeeProvider
     * @param LegacyContext $legacyContext
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Crypto\Hashing $hashing, \PrestaShop\PrestaShop\Core\Employee\Access\ProfileAccessCheckerInterface $profileAccessChecker, \PrestaShop\PrestaShop\Core\Employee\ContextEmployeeProviderInterface $contextEmployeeProvider, \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Employee\Command\EditEmployeeCommand $command)
    {
    }
}
