<?php

namespace PrestaShop\PrestaShop\Core\Domain\Security\Exception;

/**
 * Class CannotBulkDeleteSessionException is a base exception for security sessions context.
 */
class CannotBulkDeleteSessionException extends \PrestaShop\PrestaShop\Core\Domain\Security\Exception\SessionException
{
    /**
     * @param array<int, int> $sessionIds
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(array $sessionIds, string $message = '', int $code = 0, \Throwable $previous = null)
    {
    }
    /**
     * @return array<int, int>
     */
    public function getSessionIds(): array
    {
    }
}
