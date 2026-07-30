<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Catalog;

/**
 * Responsible for Cart rules (a.k.a cart discounts/vouchers) actions in Back Office
 */
class CartRuleController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Displays cart rule listing page.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     * @param CartRuleFilters $cartRuleFilters
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\CartRuleFilters $cartRuleFilters): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Searches for cart rules by provided search phrase
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller')) || is_granted('create', 'AdminOrders')")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function searchAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Deletes cart rule
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute="admin_cart_rules_index")
     * @DemoRestricted(redirectRoute="admin_cart_rules_index")
     *
     * @param int $cartRuleId
     *
     * @return RedirectResponse
     */
    public function deleteAction(int $cartRuleId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Deletes cartRules on bulk action
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute="admin_cart_rules_index")
     * @DemoRestricted(redirectRoute="admin_cart_rules_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Toggles cart rule status
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute="admin_cart_rules_index")
     * @DemoRestricted(redirectRoute="admin_cart_rules_index")
     *
     * @param int $cartRuleId
     *
     * @return RedirectResponse
     */
    public function toggleStatusAction(int $cartRuleId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Enables cart rules on bulk action
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute="admin_cart_rules_index")
     * @DemoRestricted(redirectRoute="admin_cart_rules_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkEnableAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Disables cart rules on bulk action
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute="admin_cart_rules_index")
     * @DemoRestricted(redirectRoute="admin_cart_rules_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkDisableAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
}
