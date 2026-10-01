<?php

namespace PrestaShop\PrestaShop\Adapter\Profile\CommandHandler;

/**
 * @internal
 */
abstract class AbstractProfileHandler
{
    /**
     * Checks if given profile is not assigned to any employee.
     *
     * @param \Profile $profile
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Profile\Exception\FailedToDeleteProfileException
     */
    protected function assertProfileIsNotAssignedToEmployee(\Profile $profile)
    {
    }
}
