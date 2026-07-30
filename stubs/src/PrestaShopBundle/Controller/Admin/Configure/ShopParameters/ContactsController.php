<?php

namespace PrestaShopBundle\Controller\Admin\Configure\ShopParameters;

/**
 * ContactsController is responsible for actions and rendering
 * of "Shop Parameters > Contact > Contacts" page.
 */
class ContactsController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Shows page content.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     * @param ContactFilters $filters
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\ContactFilters $filters)
    {
    }
    /**
     * @deprecated since 8.0 and will be removed in next major. Use CommonController:searchGridAction instead
     *
     * Grid search action.
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
     * Display the Contact creation form.
     *
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller'))",
     *     redirectRoute="admin_contacts_index",
     *     message="You do not have permission to add this."
     * )
     *
     * @param Request $request
     *
     * @return Response
     */
    public function createAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Display the contact edit form.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_contacts_index",
     *     message="You do not have permission to edit this."
     * )
     *
     * @param int $contactId
     * @param Request $request
     *
     * @return Response
     */
    public function editAction($contactId, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Delete a contact.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_contacts_index",
     *     message="You do not have permission to delete this."
     * )
     *
     * @DemoRestricted(redirectRoute="admin_contacts_index")
     *
     * @param int $contactId
     *
     * @return RedirectResponse
     */
    public function deleteAction($contactId)
    {
    }
    /**
     * Bulk delete contacts.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_contacts_index",
     *     message="You do not have permission to delete this."
     * )
     *
     * @DemoRestricted(redirectRoute="admin_contacts_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function deleteBulkAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}
