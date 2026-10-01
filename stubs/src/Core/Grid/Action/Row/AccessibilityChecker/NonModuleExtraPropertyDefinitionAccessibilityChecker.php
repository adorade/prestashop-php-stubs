<?php

namespace PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker;

/**
 * Grants row-level edit/delete access only to extra property definitions
 * that are NOT owned by a module (module_name IS NULL or empty string).
 * Module-owned definitions are registered programmatically and must be
 * managed by the module itself.
 */
final class NonModuleExtraPropertyDefinitionAccessibilityChecker implements \PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker\AccessibilityCheckerInterface
{
    /**
     * {@inheritdoc}
     */
    public function isGranted(array $record): bool
    {
    }
}
