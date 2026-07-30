<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Catalog;

/**
 * Class is responsible for "Sell > Catalog > Files" page.
 */
class AttachmentController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\AttachmentFilters $filters): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Show "Add new" form and handle form submit.
     *
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller'))",
     *     redirectRoute="admin_attachments_index",
     *     message="You do not have permission to create this."
     * )
     *
     * @return Response
     */
    public function createAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Show & process attachment editing.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_attachments_index",
     *     message="You do not have permission to edit this."
     * )
     *
     * @param int $attachmentId
     *
     * @return Response
     */
    public function editAction($attachmentId, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * View attachment.
     *
     * @AdminSecurity(
     *     "is_granted('read', request.get('_legacy_controller'))",
     *     redirectRoute="admin_attachments_index",
     *     message="You do not have permission to edit this."
     * )
     */
    public function viewAction(int $attachmentId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Deletes attachment
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute="admin_attachments_index")
     * @DemoRestricted(redirectRoute="admin_attachments_index")
     */
    public function deleteAction(int $attachmentId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Delete attachments in bulk action.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_attachments_index",
     *     message="You do not have permission to delete this."
     * )
     */
    public function deleteBulkAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @AdminSecurity("is_granted('read', 'AdminProducts') || is_granted('read', 'AdminAttachments')")
     *
     * @param int $attachmentId
     *
     * @return JsonResponse
     */
    public function getAttachmentInfoAction(int $attachmentId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @AdminSecurity("is_granted('read', 'AdminProducts') || is_granted('read', 'AdminAttachments')")
     *
     * @param string $searchPhrase
     *
     * @return JsonResponse
     */
    public function searchAction(string $searchPhrase): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
}
