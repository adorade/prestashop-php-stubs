<?php

namespace PrestaShop\PrestaShop\Core\Domain\Profile\Command;

/**
 * Edits existing Profile
 */
class EditProfileCommand extends \PrestaShop\PrestaShop\Core\Domain\Profile\Command\AbstractProfileCommand
{
    /**
     * @param int $profileId
     * @param string[] $localizedNames
     *
     * @throws ProfileException
     */
    public function __construct($profileId, array $localizedNames)
    {
    }
    /**
     * @return ProfileId
     */
    public function getProfileId()
    {
    }
}
