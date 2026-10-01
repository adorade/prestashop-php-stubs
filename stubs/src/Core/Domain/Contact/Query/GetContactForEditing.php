<?php

namespace PrestaShop\PrestaShop\Core\Domain\Contact\Query;

/**
 * Class GetContactForEditing is responsible for getting the data related with contact entity.
 */
class GetContactForEditing
{
    /**
     * @param int $contactId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Contact\Exception\ContactException
     */
    public function __construct($contactId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Contact\ValueObject\ContactId
     */
    public function getContactId()
    {
    }
}
