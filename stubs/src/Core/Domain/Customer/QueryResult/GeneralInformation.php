<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult;

/**
 * Class GeneralInformation.
 */
class GeneralInformation
{
    /**
     * @param string $privateNote
     * @param bool $customerBySameEmailExists
     */
    public function __construct($privateNote, $customerBySameEmailExists)
    {
    }
    /**
     * @return string
     */
    public function getPrivateNote()
    {
    }
    /**
     * @return bool
     */
    public function getCustomerBySameEmailExists()
    {
    }
}
