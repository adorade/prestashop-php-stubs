<?php

namespace PrestaShopBundle\Install;

class Database extends \PrestaShopBundle\Install\AbstractInstall
{
    public function __construct(?\PrestaShopLoggerInterface $logger = null)
    {
    }
    /**
     * Check database configuration and try a connection.
     *
     * @param string $server
     * @param string $database
     * @param string $login
     * @param string $password
     * @param string $prefix
     * @param bool $clear
     *
     * @return array List of errors
     */
    public function testDatabaseSettings($server, $database, $login, $password, $prefix, $clear = false)
    {
    }
    public function createDatabase($server, $database, $login, $password, $dropit = false)
    {
    }
    public function getBestEngine($server, $database, $login, $password)
    {
    }
}
