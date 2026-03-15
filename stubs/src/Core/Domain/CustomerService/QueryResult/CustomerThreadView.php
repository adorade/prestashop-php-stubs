<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\QueryResult;

/**
 * Carries data for customer thread view
 */
class CustomerThreadView
{
    /**
     * @param CustomerThreadId $customerThreadId
     * @param LanguageId $languageId
     * @param array $actions
     * @param CustomerInformation $customerInformation
     * @param string $contactName
     * @param CustomerThreadMessage[] $messages
     * @param CustomerThreadTimeline $timeline
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\CustomerService\ValueObject\CustomerThreadId $customerThreadId, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId, array $actions, \PrestaShop\PrestaShop\Core\Domain\CustomerService\QueryResult\CustomerInformation $customerInformation, $contactName, array $messages, \PrestaShop\PrestaShop\Core\Domain\CustomerService\QueryResult\CustomerThreadTimeline $timeline)
    {
    }
    /**
     * @return CustomerThreadId
     */
    public function getCustomerThreadId()
    {
    }
    /**
     * @return array
     */
    public function getActions()
    {
    }
    /**
     * @return CustomerInformation
     */
    public function getCustomerInformation()
    {
    }
    /**
     * @return string
     */
    public function getContactName()
    {
    }
    /**
     * @return CustomerThreadMessage[]
     */
    public function getMessages()
    {
    }
    /**
     * @return LanguageId
     */
    public function getLanguageId()
    {
    }
    /**
     * @return CustomerThreadTimeline
     */
    public function getTimeline()
    {
    }
}
