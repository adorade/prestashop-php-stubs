<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderMessage\Exception;

/**
 * Thrown when order message's name is already used by another order message.
 */
class OrderMessageNameAlreadyUsedException extends \PrestaShop\PrestaShop\Core\Domain\OrderMessage\Exception\OrderMessageException
{
    /**
     * @param string $name the email that's being used
     * @param int $langId
     * @param string $message
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct(string $name, int $langId, string $message = '', int $code = 0, \Exception $previous = null)
    {
    }
    /**
     * @return string
     */
    public function getName(): string
    {
    }
    /**
     * @return int
     */
    public function getLangId(): int
    {
    }
}
