<?php

class CustomerPersisterCore
{
    public function __construct(\Context $context, \PrestaShop\PrestaShop\Core\Crypto\Hashing $crypto, \Symfony\Contracts\Translation\TranslatorInterface $translator, $guest_allowed)
    {
    }
    public function getErrors()
    {
    }
    /**
     * READ ME - This class deals with many different use cases, make sure to check them when modifying anything!
     * - Creating a customer with no pasword from checkout (guest checkout enabled/disabled)
     * - Creating a customer with password from checkout
     * - Creating a customer from register form
     * - Converting guest to customer either by filling password in checkout or using the register form
     * - Editing customer details in my-account section
     */
    public function save(\Customer $customer, $plainTextPassword, $newPlainTextPassword = '', $passwordRequired = \true)
    {
    }
}
