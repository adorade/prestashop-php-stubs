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
     * @param Profile $profile
     *
     * @throws FailedToDeleteProfileException
     */
    protected function assertProfileIsNotAssignedToEmployee(\Profile $profile)
    {
    }
}
