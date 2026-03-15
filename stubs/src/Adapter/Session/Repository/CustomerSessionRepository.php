<?php

namespace PrestaShop\PrestaShop\Adapter\Session\Repository;

/**
 * Methods to access data storage for Customer session
 */
class CustomerSessionRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param Connection $connection
     * @param string $dbPrefix
     * @param int $cookieLifetime
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix, int $cookieLifetime)
    {
    }
    /**
     * @param CustomerSessionId $sessionId
     *
     * @return CustomerSession
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Security\ValueObject\CustomerSessionId $sessionId): \CustomerSession
    {
    }
    /**
     * @param CustomerSessionId $customerSessionId
     */
    public function delete(\PrestaShop\PrestaShop\Core\Domain\Security\ValueObject\CustomerSessionId $customerSessionId): void
    {
    }
    /**
     * @param array $customerSessionIds
     *
     * @throws CannotBulkDeleteCustomerSessionException
     */
    public function bulkDelete(array $customerSessionIds): void
    {
    }
    /**
     * Clear outdated customer sessions
     *
     * @return void
     *
     * @throws CannotClearCustomerSessionException
     */
    public function clearOutdatedSessions(): void
    {
    }
}
