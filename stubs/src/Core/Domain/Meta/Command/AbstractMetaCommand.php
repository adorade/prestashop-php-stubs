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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Meta\Exception\MetaConstraintException
     */
    protected function assertNameMatchesRegexPattern($languageId, $value, $constraintErrorCode)
    {
    }
}
