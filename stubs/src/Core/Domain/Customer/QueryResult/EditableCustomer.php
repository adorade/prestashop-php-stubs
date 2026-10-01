<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult;

/**
 * Stores editable data for customer
 */
class EditableCustomer
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerId $customerId
     * @param int $genderId
     * @param \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\FirstName $firstName
     * @param \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\LastName $lastName
     * @param \PrestaShop\PrestaShop\Core\Domain\ValueObject\Email $email
     * @param \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\Birthday $birthday
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
     * @return \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerId
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
     * @return \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\FirstName
     */
    public function getFirstName()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\LastName
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
     * @return \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\Birthday
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
