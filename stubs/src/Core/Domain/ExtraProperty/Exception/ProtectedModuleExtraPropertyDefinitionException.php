<?php

namespace PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Exception;

/**
 * Thrown when attempting to edit or delete an extra property definition
 * that is owned by a module. Module-owned definitions are read-only from the BO UI.
 */
class ProtectedModuleExtraPropertyDefinitionException extends \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Exception\ExtraPropertyException
{
}
