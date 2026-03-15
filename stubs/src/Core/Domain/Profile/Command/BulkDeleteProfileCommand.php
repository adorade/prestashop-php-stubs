<?php

namespace PrestaShop\PrestaShop\Core\Domain\Profile\Command;

/**
 * Class BulkDeleteProfileCommand is a command to bulk delete profiles by given ids.
 */
class BulkDeleteProfileCommand
{
    /**
     * @param array $profileIds
     */
    public function __construct(array $profileIds)
    {
    }
    /**
     * @return ProfileId[]
     */
    public function getProfileIds()
    {
    }
}
