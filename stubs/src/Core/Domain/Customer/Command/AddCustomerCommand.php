<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Command;

/**
 * Adds new customer with provided data
 */
class AddCustomerCommand
{
    /**
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $password
     * @param int $defaultGroupId
     * @param int[] $groupIds
     * @param int $shopId
     * @param int|null $genderId
     * @param bool $isEnabled
     * @param bool $isPartnerOffersSubscribed
     * @param string|null $birthday
     */
    public function __construct($firstName, $lastName, $email, $password, $defaultGroupId, array $groupIds, $shopId, $genderId = null, $isEnabled = true, $isPartnerOffersSubscribed = false, $birthday = null)
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
     * @return Password
     */
    public function getPassword()
    {
    }
    /**
     * @return int
     */
    public function getDefaultGroupId()
    {
    }
    /**
     * @return int[]
     */
    public function getGroupIds()
    {
    }
    /**
     * @return int|null
     */
    public function getGenderId()
    {
    }
    /**
     * @return bool
     */
    public function isEnabled()
    {
    }
    /**
     * @return bool
     */
    public function isPartnerOffersSubscribed()
    {
    }
    /**
     * @return Birthday
     */
    public function getBirthday()
    {
    }
    /**
     * @return int
     */
    public function getShopId()
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
