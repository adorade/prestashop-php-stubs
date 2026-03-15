<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult;

/**
 * Class SentEmailInformation holds information about email sent to customer.
 */
class SentEmailInformation
{
    /**
     * @param string $date
     * @param string $language
     * @param string $subject
     * @param string $template
     */
    public function __construct($date, $language, $subject, $template)
    {
    }
    /**
     * @return string
     */
    public function getDate()
    {
    }
    /**
     * @return string
     */
    public function getLanguage()
    {
    }
    /**
     * @return string
     */
    public function getSubject()
    {
    }
    /**
     * @return string
     */
    public function getTemplate()
    {
    }
}
