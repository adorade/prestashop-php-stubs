<?php

namespace PrestaShop\PrestaShop\Core\Domain\Profile\Command;

/**
 * Class DeleteProfileCommand is a command to delete profile by given id.
 */
class DeleteProfileCommand
{
    /**
     * @param int $profileId
     */
    public function __construct($profileId)
    {
    }
    /**
     * @return ProfileId
     */
    public function getProfileId()
    {
    }
}
