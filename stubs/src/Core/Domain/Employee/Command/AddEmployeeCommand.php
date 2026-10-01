<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\Command;

/**
 * Adds new employee with given data
 */
class AddEmployeeCommand
{
    /**
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $plainPassword
     * @param int $defaultPageId
     * @param int $languageId
     * @param bool $active
     * @param int $profileId
     * @param array $shopAssociation
     * @param bool $hasEnabledGravatar
     * @param int $minLength
     * @param int $maxLength
     * @param int $minScore
     */
    public function __construct($firstName, $lastName, $email, $plainPassword, $defaultPageId, $languageId, $active, $profileId, array $shopAssociation, bool $hasEnabledGravatar, int $minLength, int $maxLength, int $minScore)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject\FirstName
     */
    public function getFirstName()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject\LastName
     */
    public function getLastName()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\ValueObject\Email
     */
    public function getEmail()
    {
    }
    /**
     * @return int
     */
    public function getDefaultPageId()
    {
    }
    /**
     * @return int
     */
    public function getLanguageId()
    {
    }
    /**
     * @return bool
     */
    public function isActive()
    {
    }
    /**
     * @return int
     */
    public function getProfileId()
    {
    }
    /**
     * @return array
     */
    public function getShopAssociation()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject\Password
     */
    public function getPlainPassword()
    {
    }
    /**
     * @return bool
     */
    public function hasEnabledGravatar()
    {
    }
}
