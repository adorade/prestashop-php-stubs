<?php

namespace PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker;

/**
 * Interface ApplicabilityCheckerInterface.
 */
interface AccessibilityCheckerInterface
{
    /**
     * Check if record is applicable for row action.
     *
     * @param array $record
     *
     * @return bool
     */
    public function isGranted(array $record);
}
