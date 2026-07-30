<?php

namespace PrestaShop\PrestaShop\Core\Domain\Contact\Command;

/**
 * Class AbstractContactCommand is responsible for providing common behavior for AddContactCommand and EditContactCommand.
 */
abstract class AbstractContactCommand
{
    /**
     * @param array $values
     *
     * @return bool
     */
    protected function assertIsNotEmptyAndContainsAllNonEmptyStringValues(array $values)
    {
    }
    /**
     * @param string $value
     *
     * @return false|int
     */
    protected function assertIsGenericName($value)
    {
    }
    /**
     * @param array $values
     *
     * @return bool
     */
    protected function assertArrayContainsAllIntegerValues(array $values)
    {
    }
}
