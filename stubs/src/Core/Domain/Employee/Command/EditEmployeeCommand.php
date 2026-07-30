<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\Command;

/**
 * Edit employee with given data.
 */
class EditEmployeeCommand
{
    /**
     * @param int $employeeId
     */
    public function __construct($employeeId)
    {
    }
    /**
     * @return EmployeeId
     */
    public function getEmployeeId()
    {
    }
    /**
     * @param EmployeeId $employeeId
     *
     * @return EditEmployeeCommand
     */
    public function setEmployeeId($employeeId)
    {
    }
    /**
     * @return FirstName
     */
    public function getFirstName()
    {
    }
    /**
     * @param string $firstName
     *
     * @return EditEmployeeCommand
     */
    public function setFirstName($firstName)
    {
    }
    /**
     * @return LastName
     */
    public function getLastName()
    {
    }
    /**
     * @param string $lastName
     *
     * @return EditEmployeeCommand
     */
    public function setLastName($lastName)
    {
    }
    /**
     * @return Email
     */
    public function getEmail()
    {
    }
    /**
     * @param string $email
     *
     * @return EditEmployeeCommand
     */
    public function setEmail($email)
    {
    }
    /**
     * @return int
     */
    public function getDefaultPageId()
    {
    }
    /**
     * @param int $defaultPageId
     *
     * @return EditEmployeeCommand
     */
    public function setDefaultPageId($defaultPageId)
    {
    }
    /**
     * @return int
     */
    public function getLanguageId()
    {
    }
    /**
     * @param int $languageId
     *
     * @return EditEmployeeCommand
     */
    public function setLanguageId($languageId)
    {
    }
    /**
     * @return bool
     */
    public function isActive()
    {
    }
    /**
     * @param bool $active
     *
     * @return EditEmployeeCommand
     */
    public function setActive($active)
    {
    }
    /**
     * @return int
     */
    public function getProfileId()
    {
    }
    /**
     * @param int $profileId
     *
     * @return EditEmployeeCommand
     */
    public function setProfileId($profileId)
    {
    }
    /**
     * @return array
     */
    public function getShopAssociation()
    {
    }
    /**
     * @param array $shopAssociation
     *
     * @return EditEmployeeCommand
     */
    public function setShopAssociation($shopAssociation)
    {
    }
    /**
     * @return Password
     */
    public function getPlainPassword()
    {
    }
    /**
     * @param string $plainPassword
     * @param int $minLength
     * @param int $maxLength
     * @param int $minScore
     *
     * @return EditEmployeeCommand
     */
    public function setPlainPassword($plainPassword, int $minLength, int $maxLength, int $minScore)
    {
    }
    /**
     * @return bool
     */
    public function hasEnabledGravatar()
    {
    }
    /**
     * @param bool $hasEnabledGravatar
     *
     * @return EditEmployeeCommand
     */
    public function setHasEnabledGravatar(bool $hasEnabledGravatar)
    {
    }
}
