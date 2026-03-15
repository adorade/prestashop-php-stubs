<?php

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters;

/**
 * Class BackupController is responsible of "Configure > Advanced Parameters > Database > Backup" page.
 */
class BackupController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show backup page.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))",
     *           message="You do not have permission to update this.",
     *          redirectRoute="admin_product_catalog"
     * )
     *
     * @param Request $request
     * @param BackupFilters $filters
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\BackupFilters $filters)
    {
    }
    /**
     * Show file download view.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     * @DemoRestricted(redirectRoute="admin_backups_index")
     *
     * @param Request $request
     * @param string $downloadFileName
     *
     * @return Response
     */
    public function downloadViewAction(\Symfony\Component\HttpFoundation\Request $request, $downloadFileName)
    {
    }
    /**
     * Return a backup content as a download.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     * @DemoRestricted(redirectRoute="admin_backup")
     *
     * @param string $downloadFileName
     *
     * @return BinaryFileResponse
     */
    public function downloadContentAction($downloadFileName)
    {
    }
    /**
     * Process backup options saving.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *          message="You do not have permission to update this.",
     *          redirectRoute="admin_backups_index"
     * )
     * @DemoRestricted(redirectRoute="admin_backups_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function saveOptionsAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Create new backup.
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller'))",
     *          message="You do not have permission to create this.",
     *          redirectRoute="admin_backups_index"
     * )
     * @DemoRestricted(redirectRoute="admin_backups_index")
     *
     * @return RedirectResponse
     */
    public function createAction()
    {
    }
    /**
     * Process backup file deletion.
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))",
     *          message="You do not have permission to delete this.",
     *          redirectRoute="admin_backups_index"
     * )
     * @DemoRestricted(redirectRoute="admin_backups_index")
     *
     * @param string $deleteFileName
     *
     * @return RedirectResponse
     */
    public function deleteAction($deleteFileName)
    {
    }
    /**
     * Process bulk backup deletion.
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))",
     *          message="You do not have permission to delete this.",
     *          redirectRoute="admin_backups_index"
     * )
     * @DemoRestricted(redirectRoute="admin_backups_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Get backup form handler.
     *
     * @return FormHandlerInterface
     */
    protected function getBackupFormHandler(): \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
    {
    }
}
