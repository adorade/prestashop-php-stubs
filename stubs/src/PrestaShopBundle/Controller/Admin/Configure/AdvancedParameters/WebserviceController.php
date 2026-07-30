<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Responsible of "Configure > Advanced Parameters > Webservice" page.
 *
 * @todo: add unit tests
 */
class WebserviceController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Displays the Webservice main page.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param WebserviceKeyFilters $filters - filters for webservice list
     * @param Request $request
     *
     * @return Response
     */
    public function indexAction(\PrestaShop\PrestaShop\Core\Search\Filters\WebserviceKeyFilters $filters, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Shows Webservice Key form and handles its submit
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function createAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Redirects to webservice account form where existing webservice account record can be edited.
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))")
     *
     * @param int $webserviceKeyId
     * @param Request $request
     *
     * @return Response
     */
    public function editAction($webserviceKeyId, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @deprecated since 1.7.8 and will be removed in next major. Use CommonController:searchGridAction instead
     *
     * Searches for specific records.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function searchAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Deletes single record.
     *
     * @DemoRestricted(redirectRoute="admin_webservice_keys_index")
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message="You do not have permission to delete this.")
     *
     * @param int $webserviceKeyId
     *
     * @return RedirectResponse
     */
    public function deleteAction($webserviceKeyId)
    {
    }
    /**
     * Deletes selected records.
     *
     * @DemoRestricted(redirectRoute="admin_webservice_keys_index")
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message="You do not have permission to delete this.")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Enables status for selected rows.
     *
     * @DemoRestricted(redirectRoute="admin_webservice_keys_index")
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message="You do not have permission to edit this.")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkEnableAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Disables status for selected rows.
     *
     * @DemoRestricted(redirectRoute="admin_webservice_keys_index")
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message="You do not have permission to edit this.")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkDisableAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Toggles webservice account status.
     *
     * @DemoRestricted(redirectRoute="admin_webservice_keys_index")
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message="You do not have permission to edit this.")
     *
     * @param int $webserviceKeyId
     *
     * @return RedirectResponse
     */
    public function toggleStatusAction($webserviceKeyId)
    {
    }
    /**
     * Process the Webservice configuration form.
     *
     * @DemoRestricted(redirectRoute="admin_webservice_keys_index")
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to edit this."
     * )
     *
     * @param Request $request
     * @param WebserviceKeyFilters $filters
     *
     * @return Response|RedirectResponse
     */
    public function saveSettingsAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\WebserviceKeyFilters $filters)
    {
    }
    /**
     * @param Request $request
     * @param WebserviceKeyFilters $filters
     * @param FormInterface $form
     *
     * @return Response
     */
    protected function renderPage(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\WebserviceKeyFilters $filters, \Symfony\Component\Form\FormInterface $form): \Symfony\Component\HttpFoundation\Response
    {
    }
}
