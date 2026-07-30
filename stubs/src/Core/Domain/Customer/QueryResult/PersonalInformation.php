<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult;

/**
 * Class PersonalInformation holds personal customer information.
 */
class PersonalInformation
{
    /**
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param bool $isGuest
     * @param string $socialTitle
     * @param string $birthday
     * @param string $registrationDate
     * @param string $lastUpdateDate
     * @param string $lastVisitDate
     * @param int $rankBySales
     * @param string $shopName
     * @param string $languageName
     * @param Subscriptions $subscriptions
     * @param bool $isActive
     */
    public function __construct($firstName, $lastName, $email, $isGuest, $socialTitle, $birthday, $registrationDate, $lastUpdateDate, $lastVisitDate, $rankBySales, $shopName, $languageName, \PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult\Subscriptions $subscriptions, $isActive)
    {
    }
    /**
     * @return string
     */
    public function getFirstName()
    {
    }
    /**
     * @return string
     */
    public function getLastName()
    {
    }
    /**
     * @return string
     */
    public function getEmail()
    {
    }
    /**
     * @return bool
     */
    public function isGuest()
    {
    }
    /**
     * @return string
     */
    public function getSocialTitle()
    {
    }
    /**
     * @return string
     */
    public function getBirthday()
    {
    }
    /**
     * @return string
     */
    public function getRegistrationDate()
    {
    }
    /**
     * @return string
     */
    public function getLastUpdateDate()
    {
    }
    /**
     * @return string
     */
    public function getLastVisitDate()
    {
    }
    /**
     * @return int
     */
    public function getRankBySales()
    {
    }
    /**
     * @return string
     */
    public function getShopName()
    {
    }
    /**
     * @return string
     */
    public function getLanguageName()
    {
    }
    /**
     * @return Subscriptions
     */
    public function getSubscriptions()
    {
    }
    /**
     * @return bool
     */
    public function isActive()
    {
    }
}
