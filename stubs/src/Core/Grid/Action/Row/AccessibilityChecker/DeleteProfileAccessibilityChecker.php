<?php

namespace PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker;

/**
 * Class DeleteProfileAccessibilityChecker.
 *
 * @internal
 */
final class DeleteProfileAccessibilityChecker implements \PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker\AccessibilityCheckerInterface
{
    /**
     * @param int $superAdminProfileId
     */
    public function __construct($superAdminProfileId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function isGranted(array $profile)
    {
    }
}
