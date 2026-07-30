<?php

namespace PrestaShop\PrestaShop\Core\Domain\Configuration\Command;

/**
 * Switches debug mode on/off
 */
class SwitchDebugModeCommand
{
    /**
     * @param bool $enableDebugMode
     */
    public function __construct($enableDebugMode)
    {
    }
    /**
     * @return bool
     */
    public function enableDebugMode()
    {
    }
}
