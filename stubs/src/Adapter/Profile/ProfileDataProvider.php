<?php

namespace PrestaShop\PrestaShop\Adapter\Profile;

/**
 * Class ProfileDataProvider provides employee profile data using legacy logic.
 */
class ProfileDataProvider
{
    /**
     * @param ContextEmployeeProviderInterface $contextEmployeeProvider
     * @param int $superAdminProfileId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Employee\ContextEmployeeProviderInterface $contextEmployeeProvider, $superAdminProfileId)
    {
    }
    /**
     * Get employee profiles.
     *
     * @param int $languageId
     *
     * @return array
     */
    public function getProfiles($languageId)
    {
    }
}
