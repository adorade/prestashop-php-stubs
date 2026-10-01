<?php

namespace PrestaShop\PrestaShop\Adapter\Session\Repository;

/**
 * Methods to access data storage for Employee session
 */
class EmployeeSessionRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param \Doctrine\DBAL\Connection $connection
     * @param string $dbPrefix
     * @param int $cookieLifetime
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix, int $cookieLifetime)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Security\ValueObject\EmployeeSessionId $sessionId
     *
     * @return \EmployeeSession
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Security\ValueObject\EmployeeSessionId $sessionId): \EmployeeSession
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Security\ValueObject\EmployeeSessionId $employeeSessionId
     */
    public function delete(\PrestaShop\PrestaShop\Core\Domain\Security\ValueObject\EmployeeSessionId $employeeSessionId): void
    {
    }
    /**
     * @param array $employeeSessionIds
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Security\Exception\CannotBulkDeleteEmployeeSessionException
     */
    public function bulkDelete(array $employeeSessionIds): void
    {
    }
    /**
     * Clear outdated employee sessions
     *
     * @return void
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Security\Exception\CannotClearEmployeeSessionException
     */
    public function clearOutdatedSessions(): void
    {
    }
}
