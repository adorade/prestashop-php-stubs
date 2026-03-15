<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult;

/**
 * Class LastConnectionInformation holds information about last customer connection to shop.
 */
class LastConnectionInformation
{
    /**
     * @param int $connectionId
     * @param string $connectionDate
     * @param int $pagesViewed
     * @param string $totalTime
     * @param string $httpReferer
     * @param string $ipAddress
     */
    public function __construct($connectionId, $connectionDate, $pagesViewed, $totalTime, $httpReferer, $ipAddress)
    {
    }
    /**
     * @return int
     */
    public function getConnectionId()
    {
    }
    /**
     * @return string
     */
    public function getConnectionDate()
    {
    }
    /**
     * @return int
     */
    public function getPagesViewed()
    {
    }
    /**
     * @return string
     */
    public function getTotalTime()
    {
    }
    /**
     * @return string
     */
    public function getHttpReferer()
    {
    }
    /**
     * @return string
     */
    public function getIpAddress()
    {
    }
}
