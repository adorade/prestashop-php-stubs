<?php

namespace PrestaShop\PrestaShop\Core\Domain\Language\Command;

/**
 * Enables or disables language based in given status
 */
class ToggleLanguageStatusCommand implements \PrestaShop\PrestaShop\Core\Domain\Language\Command\ToggleLanguageStatusCommandInterface
{
    /**
     * @param int $languageId
     * @param bool $expectedStatus
     *
     * @throws LanguageConstraintException Is thrown when invalid data is provided
     */
    public function __construct($languageId, $expectedStatus)
    {
    }
    /**
     * @return LanguageId
     */
    public function getLanguageId()
    {
    }
    /**
     * @return bool
     */
    public function getStatus()
    {
    }
}
