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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Profile\Exception\ProfileException
     */
    public function __construct($profileId, array $localizedNames)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Profile\ValueObject\ProfileId
     */
    public function getProfileId()
    {
    }
}
