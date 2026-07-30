<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Command;

/**
 * Edits provided customer.
 * It can edit either all or partial data.
 *
 * Only not-null values are considered when editing customer.
 * For example, if the email is null, then the original value is not modified,
 * however, if email is set, then the original value will be overwritten.
 */
class EditCustomerCommand
{
    /**
     * @param int $customerId
     */
    public function __construct($customerId)
    {
    }
    /**
     * @return CustomerId
     */
    public function getCustomerId()
    {
    }
    /**
     * @return FirstName|null
     */
    public function getFirstName()
    {
    }
    /**
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName($firstName)
    {
    }
    /**
     * @return LastName|null
     */
    public function getLastName()
    {
    }
    /**
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName($lastName)
    {
    }
    /**
     * @return Email|null
     */
    public function getEmail()
    {
    }
    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail($email)
    {
    }
    /**
     * @return Password|null
     */
    public function getPassword()
    {
    }
    /**
     * @param string $password
     *
     * @return self
     */
    public function setPassword($password)
    {
    }
    /**
     * @return int|null
     */
    public function getDefaultGroupId()
    {
    }
    /**
     * @param int $defaultGroupId
     *
     * @return self
     */
    public function setDefaultGroupId($defaultGroupId)
    {
    }
    /**
     * @return int[]|null
     */
    public function getGroupIds()
    {
    }
    /**
     * @param int[] $groupIds
     *
     * @return self
     */
    public function setGroupIds(array $groupIds)
    {
    }
    /**
     * @return int|null
     */
    public function getGenderId()
    {
    }
    /**
     * @param int $genderId
     *
     * @return self
     */
    public function setGenderId($genderId)
    {
    }
    /**
     * @return bool|null
     */
    public function isNewsletterSubscribed()
    {
    }
    /**
     * @param bool $isNewsletterSubscribed
     */
    public function setNewsletterSubscribed($isNewsletterSubscribed)
    {
    }
    /**
     * @return bool
     */
    public function isEnabled()
    {
    }
    /**
     * @param bool $isEnabled
     *
     * @return self
     */
    public function setIsEnabled($isEnabled)
    {
    }
    /**
     * @return bool|null
     */
    public function isPartnerOffersSubscribed()
    {
    }
    /**
     * @param bool $isPartnerOffersSubscribed
     *
     * @return self
     */
    public function setIsPartnerOffersSubscribed($isPartnerOffersSubscribed)
    {
    }
    /**
     * @return Birthday|null
     */
    public function getBirthday()
    {
    }
    /**
     * @param string $birthday
     *
     * @return self
     */
    public function setBirthday($birthday)
    {
    }
    /**
     * @return string|null
     */
    public function getCompanyName()
    {
    }
    /**
     * @param string $companyName
     *
     * @return self
     */
    public function setCompanyName($companyName)
    {
    }
    /**
     * @return string|null
     */
    public function getSiretCode()
    {
    }
    /**
     * @param string $siretCode
     *
     * @return self
     */
    public function setSiretCode($siretCode)
    {
    }
    /**
     * @return ApeCode|null
     */
    public function getApeCode()
    {
    }
    /**
     * @param string $apeCode
     *
     * @return self
     */
    public function setApeCode($apeCode)
    {
    }
    /**
     * @return string|null
     */
    public function getWebsite()
    {
    }
    /**
     * @param string $website
     *
     * @return self
     */
    public function setWebsite($website)
    {
    }
    /**
     * @return float|null
     */
    public function getAllowedOutstandingAmount()
    {
    }
    /**
     * @param float $allowedOutstandingAmount
     *
     * @return self
     */
    public function setAllowedOutstandingAmount($allowedOutstandingAmount)
    {
    }
    /**
     * @return int|null
     */
    public function getMaxPaymentDays()
    {
    }
    /**
     * @param int $maxPaymentDays
     *
     * @return self
     */
    public function setMaxPaymentDays($maxPaymentDays)
    {
    }
    /**
     * @return int|null
     */
    public function getRiskId()
    {
    }
    /**
     * @param int $riskId
     *
     * @return self
     */
    public function setRiskId($riskId)
    {
    }
}
