<?php

namespace PrestaShop\PrestaShop\Core\Domain\Contact\Command;

/**
 * Class EditContactCommand is responsible for editing contact data.
 */
class EditContactCommand extends \PrestaShop\PrestaShop\Core\Domain\Contact\Command\AbstractContactCommand
{
    /**
     * @param int $contactId
     *
     * @throws ContactException
     */
    public function __construct($contactId)
    {
    }
    /**
     * @return ContactId
     */
    public function getContactId()
    {
    }
    /**
     * @return string[]
     */
    public function getLocalisedTitles()
    {
    }
    /**
     * @param string[] $localisedTitles
     *
     * @return self
     *
     * @throws ContactConstraintException
     */
    public function setLocalisedTitles(array $localisedTitles)
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
     * @return self
     *
     * @throws DomainConstraintException
     */
    public function setEmail($email)
    {
    }
    /**
     * @return bool
     */
    public function isMessagesSavingEnabled()
    {
    }
    /**
     * @param bool $isMessagesSavingEnabled
     *
     * @return self
     */
    public function setIsMessagesSavingEnabled($isMessagesSavingEnabled)
    {
    }
    /**
     * @return string[]
     */
    public function getLocalisedDescription()
    {
    }
    /**
     * @param string[] $localisedDescription
     *
     * @return self
     */
    public function setLocalisedDescription(array $localisedDescription)
    {
    }
    /**
     * @return int[]
     */
    public function getShopAssociation()
    {
    }
    /**
     * @param int[] $shopAssociation
     *
     * @return self
     *
     * @throws ContactConstraintException
     */
    public function setShopAssociation(array $shopAssociation)
    {
    }
}
