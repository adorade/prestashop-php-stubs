<?php

namespace PrestaShop\PrestaShop\Core\Domain\Meta\Command;

/**
 * Class AbstractMetaCommand is responsible for defining the abstraction for AddMetaCommand and EditMetaCommand.
 */
abstract class AbstractMetaCommand
{
    /**
     * @param int $languageId
     * @param string $value
     * @param int $constraintErrorCode
     *
     * @throws MetaConstraintException
     */
    protected function assertNameMatchesRegexPattern($languageId, $value, $constraintErrorCode)
    {
    }
}
