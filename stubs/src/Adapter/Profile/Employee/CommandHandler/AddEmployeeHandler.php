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
     * @param Hashing $hashing
     * @param ProfileAccessCheckerInterface $profileAccessChecker
     * @param ContextEmployeeProviderInterface $contextEmployeeProvider
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
