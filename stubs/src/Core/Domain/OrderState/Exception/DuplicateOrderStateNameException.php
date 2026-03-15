<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderState\Exception;

/**
 * Exception is thrown when name which already exists is being used to create or update other order state
 */
class DuplicateOrderStateNameException extends \PrestaShop\PrestaShop\Core\Domain\OrderState\Exception\OrderStateException
{
    /**
     * @param string $message
     * @param int $code
     * @param null $previous
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\OrderState\ValueObject\Name $name, $message = '', $code = 0, $previous = null)
    {
    }
    /**
     * @return Name
     */
    public function getName()
    {
    }
}
