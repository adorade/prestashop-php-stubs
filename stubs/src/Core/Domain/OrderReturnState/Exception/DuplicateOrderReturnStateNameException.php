<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Exception;

/**
 * Exception is thrown when name which already exists is being used to create or update other order state
 */
class DuplicateOrderReturnStateNameException extends \PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Exception\OrderReturnStateException
{
    /**
     * @param string $message
     * @param int $code
     * @param null $previous
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\OrderReturnState\ValueObject\Name $name, $message = '', $code = 0, $previous = null)
    {
    }
    /**
     * @return Name
     */
    public function getName()
    {
    }
}
