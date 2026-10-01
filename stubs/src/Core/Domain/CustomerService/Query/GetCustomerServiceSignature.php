<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\Query;

/**
 * Gets signature for replying in customer thread
 */
class GetCustomerServiceSignature
{
    /**
     * @param int $languageId
     */
    public function __construct($languageId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId
     */
    public function getLanguageId()
    {
    }
}
