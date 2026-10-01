<?php

namespace PrestaShop\PrestaShop\Core\Domain\Webservice\Exception;

/**
 * Thrown on failure to delete Webservice
 */
class CannotDeleteWebserviceException extends \PrestaShop\PrestaShop\Core\Domain\Webservice\Exception\WebserviceException
{
    /**
     * @param array<int, array<string, array|string>> $errors
     * @param string $message
     * @param int $code
     * @param \Throwable $previous
     */
    public function __construct(array $errors, $message = '', $code = 0, ?\Throwable $previous = null)
    {
    }
    /**
     * @return array<int, array<string, array|string>>
     */
    public function getErrors(): array
    {
    }
}
