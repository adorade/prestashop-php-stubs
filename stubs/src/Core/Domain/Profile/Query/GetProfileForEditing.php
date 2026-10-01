<?php

namespace PrestaShop\PrestaShop\Core\Domain\Profile\Query;

/**
 * Get Profile data for editing
 */
class GetProfileForEditing
{
    /**
     * @param int $profileId
     */
    public function __construct($profileId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Profile\ValueObject\ProfileId
     */
    public function getProfileId()
    {
    }
}
