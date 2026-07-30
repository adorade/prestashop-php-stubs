<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult;

class Subscriptions
{
    /**
     * @param bool $isNewsletterSubscribed
     * @param bool $isPartnerOffersSubscribed
     */
    public function __construct($isNewsletterSubscribed, $isPartnerOffersSubscribed)
    {
    }
    /**
     * @return bool
     */
    public function isNewsletterSubscribed()
    {
    }
    /**
     * @return bool
     */
    public function isPartnerOffersSubscribed()
    {
    }
}
