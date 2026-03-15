<?php

namespace PrestaShop\PrestaShop\Adapter\System;

/**
 * Provides a summary of system information.
 */
class SystemInformation
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Hosting\HostingInformation $hostingInformation, \PrestaShop\PrestaShop\Adapter\Mail\MailingInformation $mailingInformation, \PrestaShop\PrestaShop\Adapter\Shop\ShopInformation $shopInformation)
    {
    }
    /**
     * @return array
     */
    public function getSummary()
    {
    }
}
