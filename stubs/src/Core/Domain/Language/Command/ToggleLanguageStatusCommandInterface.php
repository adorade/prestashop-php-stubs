<?php

namespace PrestaShop\PrestaShop\Core\Domain\Language\Command;

/**
 * Interface that toggles language's status command
 */
interface ToggleLanguageStatusCommandInterface
{
    /**
     * @return bool
     */
    public function getStatus();
}
