<?php

namespace PrestaShop\PrestaShop\Core\Domain\Contact\Command;

/**
 * Class AddContactCommand is responsible for adding the contact data.
 */
class AddContactCommand extends \PrestaShop\PrestaShop\Core\Domain\Contact\Command\AbstractContactCommand
{
    /**
     * @param string[] $localisedTitles - sample: [$langId => $title]
     * @param bool $isMessageSavingEnabled
     *
     * @throws ContactConstraintException
     */
    public function __construct(array $localisedTitles, $isMessageSavingEnabled)
    {
    }
    /**
     * @return string[]
     */
    public function getLocalisedTitles()
    {
    }
    /**
     * @return bool
     */
    public function isMessageSavingEnabled()
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
