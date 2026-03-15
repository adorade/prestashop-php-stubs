<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\QueryResult;

/**
 * Stores editable data of an employee.
 */
class EditableEmployee
{
    /**
     * @param EmployeeId $employeeId
     * @param FirstName $firstName
     * @param LastName $lastName
     * @param Email $email
     * @param string $avatarUrl
     * @param int $defaultPageId
     * @param int $languageId
     * @param bool $active
     * @param int $profileId
     * @param array $shopAssociation
     * @param bool $hasEnabledGravatar
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject\EmployeeId $employeeId, \PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject\FirstName $firstName, \PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject\LastName $lastName, \PrestaShop\PrestaShop\Core\Domain\ValueObject\Email $email, $avatarUrl, $defaultPageId, $languageId, $active, $profileId, array $shopAssociation, bool $hasEnabledGravatar = false)
    {
    }
    /**
     * @return EmployeeId
     */
    public function getEmployeeId()
    {
    }
    /**
     * @return FirstName
     */
    public function getFirstName()
    {
    }
    /**
     * @return LastName
     */
    public function getLastName()
    {
    }
    /**
     * @return Email
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
     * @return string
     */
    public function getAvatarUrl()
    {
    }
    /**
     * @return bool
     */
    public function hasEnabledGravatar()
    {
    }
}
