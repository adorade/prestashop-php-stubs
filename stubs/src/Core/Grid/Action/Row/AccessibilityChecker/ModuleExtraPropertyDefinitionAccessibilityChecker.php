<?php

namespace PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker;

/**
 * Grants row-level access to the read-only "view" action only for extra property definitions
 * that ARE owned by a module (module_name non-empty) — the exact inverse of
 * NonModuleExtraPropertyDefinitionAccessibilityChecker, which grants edit/delete instead. A row
 * is never granted both: the two actions are mutually exclusive on module_name.
 */
final class ModuleExtraPropertyDefinitionAccessibilityChecker implements \PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker\AccessibilityCheckerInterface
{
    /**
     * {@inheritdoc}
     */
    public function isGranted(array $record): bool
    {
    }
}
