<?php

namespace PrestaShop\PrestaShop\Core\Domain\Contact\QueryResult;

/**
 * Transfers contact data for editing.
 */
class EditableContact
{
    /**
     * @param int $contactId
     * @param string[] $localisedTitles
     * @param string $email
     * @param bool $isMessagesSavingEnabled
     * @param string[] $localisedDescription
     * @param int[] $shopAssociation
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Contact\Exception\ContactException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Exception\DomainConstraintException
     */
    public function __construct($contactId, array $localisedTitles, $email, $isMessagesSavingEnabled, $localisedDescription, array $shopAssociation)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Contact\ValueObject\ContactId
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
     * @return \PrestaShop\PrestaShop\Core\Domain\ValueObject\Email|null
     */
    public function getEmail()
    {
    }
    /**
     * @return bool
     */
    public function isMessagesSavingEnabled()
    {
    }
    /**
     * @return string[]
     */
    public function getLocalisedDescription()
    {
    }
    /**
     * @return int[]
     */
    public function getShopAssociation()
    {
    }
}
