<?php

namespace PrestaShop\PrestaShop\Core\Team\Employee\Configuration;

/**
 * Interface OptionsCheckerInterface.
 */
interface OptionsCheckerInterface
{
    /**
     * Check if employee options can be changed.
     *
     * @return bool
     */
    public function canBeChanged();
}
