<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Builds the grid definition for the BO extra property definition management page.
 *
 * The grid lists all entries in the extra_property_definition registry table.
 * display_front is shown as a read-only BooleanColumn — it is only editable via the form.
 * Edit and Delete actions are hidden for module-owned rows (module_name IS NOT NULL) — those
 * rows only get the read-only "view" action instead, so the grid always links to the right
 * action for a row, with no redirect needed.
 */
final class ExtraPropertyDefinitionGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\BulkDeleteActionTrait;
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    public const GRID_ID = 'extra_property_definition';
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, private readonly \PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker\NonModuleExtraPropertyDefinitionAccessibilityChecker $nonModuleAccessibilityChecker, private readonly \PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker\ModuleExtraPropertyDefinitionAccessibilityChecker $moduleOwnedAccessibilityChecker, private readonly \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\ExtraPropertyTypeChoiceProvider $typeChoiceProvider, private readonly \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\ExtraPropertyScopeChoiceProvider $scopeChoiceProvider, private readonly \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multistoreFeature)
    {
    }
}
