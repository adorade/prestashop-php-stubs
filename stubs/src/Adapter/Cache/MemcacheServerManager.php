<?php

namespace PrestaShop\PrestaShop\Adapter\Cache;

/**
 * This class manages Memcache(d) servers in "Configure > Advanced Parameters > Performance" page.
 */
class MemcacheServerManager
{
    public function __construct(\Doctrine\DBAL\Connection $connection, $dbPrefix)
    {
    }
    /**
     * Add a memcache server.
     *
     * @param string $serverIp
     * @param int $serverPort
     * @param int $serverWeight
     */
    public function addServer($serverIp, $serverPort, $serverWeight)
    {
    }
    /**
     * Test if a Memcache configuration is valid.
     *
     * @param string $serverIp
     * @param int $serverPort
     *
     * @return bool
     */
    public function testConfiguration($serverIp, $serverPort)
    {
    }
    /**
     * Delete a memcache server (a deletion returns the number of rows deleted).
     *
     * @param int $serverId Server ID (in database)
     *
     * @return bool
     */
    public function deleteServer($serverId)
    {
    }
    /**
     * Get list of memcached servers.
     *
     * @return array
     */
    public function getServers()
    {
    }
}
