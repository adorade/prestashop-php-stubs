<?php

namespace PrestaShop\PrestaShop\Adapter\Profile\Employee\CommandHandler;

/**
 * Handles command which adds new employee using legacy object model
 *
 * @internal
 */
final class AddEmployeeHandler extends \PrestaShop\PrestaShop\Adapter\Profile\Employee\CommandHandler\AbstractEmployeeHandler implements \PrestaShop\PrestaShop\Core\Domain\Employee\CommandHandler\AddEmployeeHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Crypto\Hashing $hashing
     * @param \PrestaShop\PrestaShop\Core\Employee\Access\ProfileAccessCheckerInterface $profileAccessChecker
     * @param \PrestaShop\PrestaShop\Core\Employee\ContextEmployeeProviderInterface $contextEmployeeProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Crypto\Hashing $hashing, \PrestaShop\PrestaShop\Core\Employee\Access\ProfileAccessCheckerInterface $profileAccessChecker, \PrestaShop\PrestaShop\Core\Employee\ContextEmployeeProviderInterface $contextEmployeeProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Employee\Command\AddEmployeeCommand $command)
    {
    }
}
