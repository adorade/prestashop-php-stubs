<?php

namespace PrestaShopBundle\Controller\Admin\Improve\International;

/**
 * Responsible for handling "Improve > International > Tax Rules" page.
 */
class TaxRulesGroupController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show tax rules group page.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\TaxRulesGroupFilters $filters
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\TaxRulesGroupFilters $filters): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller'))",
     *     redirectRoute="admin_tax_rules_groups_index",
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Handles tax rules group edit
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_tax_rules_groups_index",
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $taxRulesGroupId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction(\Symfony\Component\HttpFoundation\Request $request, int $taxRulesGroupId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Deletes tax rules group.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_tax_rules_groups_index",
     * )
     *
     * @param int $taxRulesGroupId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction(int $taxRulesGroupId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Toggles status.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_tax_rules_groups_index",
     * )
     *
     * @param int $taxRulesGroupId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function toggleStatusAction(int $taxRulesGroupId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Enables tax rules groups status on bulk action.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_tax_rules_groups_index",
     * )
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function bulkEnableStatusAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Disables tax rules groups status on bulk action.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_tax_rules_groups_index",
     * )
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function bulkDisableStatusAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Delete tax rules groups on bulk action.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_tax_rules_groups_index",
     * )
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface
     */
    protected function getFormHandler(): \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface
     */
    protected function getFormBuilder(): \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface
    {
    }
}
