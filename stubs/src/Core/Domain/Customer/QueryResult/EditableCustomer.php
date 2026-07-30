<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult;

/**
 * Stores editable data for customer
 */
class EditableCustomer
{
    /**
     * @param CustomerId $customerId
     * @param int $genderId
     * @param FirstName $firstName
     * @param LastName $lastName
     * @param Email $email
     * @param Birthday $birthday
     * @param bool $isEnabled
     * @param bool $isPartnerOffersSubscribed
     * @param bool $isNewsletterSubscribed
     * @param int[] $groupIds
     * @param int $defaultGroupId
     * @param string $companyName
     * @param string $siretCode
     * @param string $apeCode
     * @param string $website
     * @param float $allowedOutstandingAmount
     * @param int $maxPaymentDays
     * @param int $riskId
     * @param bool $isGuest
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerId $customerId, $genderId, \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\FirstName $firstName, \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\LastName $lastName, \PrestaShop\PrestaShop\Core\Domain\ValueObject\Email $email, \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\Birthday $birthday, $isEnabled, $isPartnerOffersSubscribed, $isNewsletterSubscribed, array $groupIds, $defaultGroupId, $companyName, $siretCode, $apeCode, $website, $allowedOutstandingAmount, $maxPaymentDays, $riskId, bool $isGuest = false)
    {
    }
    /**
     * @return CustomerId
     */
    public function getCustomerId()
    {
    }
    /**
     * @return int
     */
    public function getGenderId()
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
     * @return Birthday
     */
    public function getBirthday()
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
     * @return array|int[]
     */
    public function getGroupIds()
    {
    }
    /**
     * @return int
     */
    public function getDefaultGroupId()
    {
    }
    /**
     * @return string
     */
    public function getCompanyName()
    {
    }
    /**
     * @return string
     */
    public function getSiretCode()
    {
    }
    /**
     * @return string
     */
    public function getApeCode()
    {
    }
    /**
     * @return string
     */
    public function getWebsite()
    {
    }
    /**
     * @return float
     */
    public function getAllowedOutstandingAmount()
    {
    }
    /**
     * @return int
     */
    public function getMaxPaymentDays()
    {
    }
    /**
     * @return int
     */
    public function getRiskId()
    {
    }
    /**
     * @return bool
     */
    public function isNewsletterSubscribed()
    {
    }
    /**
     * @return bool
     */
    public function isGuest(): bool
    {
    }
}
